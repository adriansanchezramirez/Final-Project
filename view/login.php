<?php  
$sesion=session_start();
if (isset($_SESSION["email"])){
	header("Location: index.php?mod=anime&ope=anime");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <title>Inicio de Sesión</title>
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
          <div class="navbar-brand"><img srcset="assets/img/sesion.png" alt="" /></div>
          <div class="navbar-hamburger ml-auto d-lg-none d-xl-none"><button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse"><span></span></button></div>
        </div>
        <!-- /.navbar-header -->
        <div class="navbar-collapse collapse w-100 bg-light">
          <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item"><a class="nav-link" href="index.php?mod=anime&ope=index">Lista de Anime</a>
              <!--/.dropdown-menu -->
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="index.php?mod=manga&ope=index">Lista de Manga</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="index.php?mod=user&ope=sigin">Iniciar Sesión</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="index.php?mod=user&ope=create">Registrarse</a>
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
            <div class="space20"></div>
            <form class="comment-form" id="login-form" action="index.php" method="GET" role="form" style="display: block;">
                <input id="mod" name="mod" type="hidden" value="user">
                <input id="ope" name="ope" type="hidden" value="sigin">
                <div class="form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn">Iniciar Sesión</button>
            </form>
              <!-- /.post -->
            </div>
            <!-- /.blog -->

          </div>
                    
          <!--/column -->
          <aside class="col-md-4 sidebar">

            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Sobre el Autor</h3>
                <p>A continuación dejo un enlace a mis redes sociales para poder conocer mi obra un poco mejor</p>
              <ul class="social social-color social-s">
                <li><a href="https://twitter.com/AdrianKyoya" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/adrian.sanchezramirez.3" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/adri_kyoya/"><i class="fa fa-instagram"></i></a></li>
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
              <li><a href="https://twitter.com/AdrianKyoya"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.facebook.com/adrian.sanchezramirez.3"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/adri_kyoya/"><i class="fa fa-instagram"></i></a></li>
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