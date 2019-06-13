<?php  
//iniciamos session
$sesion=session_start();
if (!isset($_SESSION["email"])){
	header("Location: index.php?mod=anime&ope=index");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/favicon.png">
  <title>Lista de Anime</title>
  <link rel="stylesheet" type="text/css" href="assets/style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/style/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="assets/style/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="assets/style/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="assets/style/revolution/css/navigation.css">
  <link rel="stylesheet" type="text/css" href="assets/style/type/icons.css">
  <link rel="stylesheet" type="text/css" href="assets/style.css">
  <link rel="stylesheet" type="text/css" href="assets/style/css/color/lavender.css">
</head>
<body>
  <div class="content-wrapper">
  <nav class="navbar center navbar-expand-lg">
      <div class="container flex-lg-column">
        <div class="navbar-header">
          <div class="navbar-brand"><img srcset="assets/anime.png" alt="" /></div>
          <div class="navbar-hamburger ml-auto d-lg-none d-xl-none"><button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse"><span></span></button></div>
        </div>
        <!-- /.navbar-header -->
        <div class="navbar-collapse collapse w-100 bg-light">
          <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item"><a class="nav-link" href="index.php?mod=anime&ope=anime">Lista de Anime</a>
              <ul class="dropdown-menu">
                <li class="nav-item dropdown"><a class="dropdown-item" href="index.php?mod=anime&ope=serie">Series</a></li>
                <li class="nav-item dropdown"><a class="dropdown-item" href="index.php?mod=anime&ope=pelicula">Películas</a></li>
                <li class="nav-item dropdown"><a class="dropdown-item" href="index.php?mod=anime&ope=ova">OVA´s</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="index.php?mod=manga&ope=manga">Lista de Manga</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="index.php?mod=user&ope=logout">Cerrar Sesión</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle">Mis Listas</a>
              <ul class="dropdown-menu">
                <li class="nav-item dropdown"><a class="dropdown-item" href="#">Perfil</a></li>
                <li class="nav-item dropdown"><a class="dropdown-item" href="index.php?mod=user&ope=showanime&idUsu=<?php echo $_SESSION['idUsu'];?>">Mi Lista de Anime</a></li>
                <li class="nav-item dropdown"><a class="dropdown-item" href="index.php?mod=user&ope=showmanga&idUsu=<?php echo $_SESSION['idUsu'];?>">Mi Lista de Manga</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="wrapper light-wrapper">
      <div class="container inner pt-60">
        <div class="row">
          <div class="col-md-8">
            <div class="blog grid grid-view boxed boxed-classic-view">
            <?php
                foreach($datos as $item){
            ?>
              <div class="post">
                <div class="box bg-white shadow">
                  <figure class="main mb-30 overlay overlay1 rounded"><a href="index.php?mod=manga&ope=show&idMan=<?=$item->getIdMan();?>"> <img width="260px" height="370px" src="<?=$item->getCover();?>"> /></a>
                    <figcaption>
                      <h5 class="text-uppercase from-top mb-0">Leer más</h5>
                    </figcaption>
                  </figure>
                  <h2 class="post-title"><a href="index.php?mod=manga&ope=show&idMan=<?=$item->getIdMan();?>"><?=$item->getTitle();?></a></h2>
                  <div class="post-content">
                    <p><?=$item->getDescription();?></p>
                  </div>
                  <!-- /.post-content -->
                  <hr />
                  <div class="meta meta-footer d-flex justify-content-between mb-0"><span class="date"> Numero de Capitulos: <?=$item->getEpisode();?></span><span><a href="index.php?mod=list&ope=create&idMan=<?=$item->getIdMan();?>&idUsu=<?php echo $_SESSION['idUsu'];?>"> Añadir</a></span><span class="comments"><a href="#">3</a></span></div>
                </div>
                <!-- /.box -->
              </div>
            <?php
                }
            ?>
              <!-- /.post -->
            </div>
            <!-- /.blog -->
            <div class="pagination bg">
              <ul>
                <li><a href="#" class="btn btn-white shadow"><i class="mi-arrow-left"></i></a></li>
                <li class="active"><a href="#" class="btn btn-white shadow"><span>1</span></a></li>
                <li><a href="#" class="btn btn-white shadow"><span>2</span></a></li>
                <li><a href="#" class="btn btn-white shadow"><span>3</span></a></li>
                <li><a href="#" class="btn btn-white shadow"><i class="mi-arrow-right"></i></a></li>
              </ul>
            </div>
            <!-- /.pagination -->
          </div>

          
          <!--/column -->
          <aside class="col-md-4 sidebar">
          
          <div class="sidebox widget">
            <h3 class="widget-title">Buscador</h3>
            <form class="search-form">
              <div class="form-group">
                <input type="text" class="form-control" >
              </div>
              <!-- /.form-group -->
            </form>
            <!-- /.search-form -->
          </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Sobre el Autor</h3>
                <p>A continuación dejo un enlace a mis redes sociales para poder conocer mi obra un poco mejor</p>
              <ul class="social social-color social-s">
                <li><a href="https://twitter.com/AdrianKyoya" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/adrian.sanchezramirez.3" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/adri_kyoya/" target="_blank"><i class="fa fa-instagram"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <!-- /.widget -->
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <footer class="dark-wrapper inverse-text">
      <div class="container inner">
        <div class="row d-md-flex align-items-md-center">
          <div class="col-md-4 text-center text-md-left">
            <p class="mb-0">© 2019 . Todos los derechos reservados.</p>
          </div>
          <!--/column -->
          <div class="col-md-4 text-center"></div>
          <!--/column -->
          <div class="col-md-4 text-center text-md-right">
            <ul class="social social-mute social-s mt-10">
              <li><a href="https://twitter.com/AdrianKyoya" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.facebook.com/adrian.sanchezramirez.3" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/adri_kyoya/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </footer>
  </div>
  <!-- /.content-wrapper -->
  <script src="assets/style/js/jquery.min.js"></script>
  <script src="assets/style/js/popper.min.js"></script>
  <script src="assets/style/js/bootstrap.min.js"></script>
  <script src="assets/style/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="assets/style/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script src="assets/style/js/plugins.js"></script>
  <script src="assets/style/js/scripts.js"></script>
</body>
</html>