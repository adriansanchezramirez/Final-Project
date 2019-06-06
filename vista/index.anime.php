<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/style/images/favicon.png">
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
          <div class="navbar-brand"><a href="index.html"><img src="#" srcset="assets/logo.png 1x, assets/style/images/logo@2x.png 2x" alt="" /></a></div>
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
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Iniciar Sesión</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Registrarse</a>
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
                  <figure class="main mb-30 overlay overlay1 rounded"><a href="#"> <img width="260px" height="370px" src="<?=$item->getCover();?>"> /></a>
                    <figcaption>
                      <h5 class="text-uppercase from-top mb-0">Leer más</h5>
                    </figcaption>
                  </figure>
                  <div class="meta mb-10"><span class="category"><a href="#" class="hover color"><?=$item->getCategory();?></a></span></div>
                  <h2 class="post-title"><a href="blog-post.html"><?=$item->getName();?></a></h2>
                  <div class="post-content">
                    <p><?=$item->getDescription();?></p>
                  </div>
                  <!-- /.post-content -->
                  <hr />
                  <div class="meta meta-footer d-flex justify-content-between mb-0"><span class="date"> Numero de Capitulos: <?=$item->getEpisode();?></span><span class="comments"><a href="#">3</a></span></div>
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
              <h3 class="widget-title">Sobre el Autor</h3>
                <p>A continuación dejo un enlace a mis redes sociales</p>
              <ul class="social social-color social-s">
                <li><a href="https://twitter.com/AdrianKyoya" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/adrian.sanchezramirez.3" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Popular Posts</h3>
              <ul class="image-list">
                <li>
                  <figure class="rounded"><a href="blog-post.html"><img src="assets/style/images/art/a1.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="blog-post.html">Magna Mollis Ultricies Mauris</a> </h6>
                    <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#">4</a></span></div>
                  </div>
                </li>
                <li>
                  <figure class="rounded"> <a href="blog-post.html"><img src="assets/style/images/art/a2.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="blog-post.html">Ornare Nullam Risus Cursus</a> </h6>
                    <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#">4</a></span></div>
                  </div>
                </li>
                <li>
                  <figure class="rounded"><a href="blog-post.html"><img src="assets/style/images/art/a3.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="blog-post.html">Euismod Nullam Fusce</a> </h6>
                    <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#">4</a></span></div>
                  </div>
                </li>
              </ul>
              <!-- /.image-list -->
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Categories</h3>
              <ul class="unordered-list">
                <li><a href="#">Lifestyle (21)</a></li>
                <li><a href="#">Photography (19)</a></li>
                <li><a href="#">Journal (16)</a></li>
                <li><a href="#">Works (7)</a></li>
                <li><a href="#">Conceptual (12)</a></li>
                <li><a href="#">Videography (14)</a></li>
              </ul>
            </div>
            <div class="sidebox widget">
              <h3 class="widget-title">Instagram</h3>
              <div class="tiles tiles-s">
                <div id="instafeed-widget" class="items row"></div>
              </div>
              <!--/.tiles -->
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Search</h3>
              <form class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search something">
                </div>
                <!-- /.form-group -->
              </form>
              <!-- /.search-form -->
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
            <p class="mb-0">© 2019 Missio. All rights reserved.</p>
          </div>
          <!--/column -->
          <div class="col-md-4 text-center">
            <img src="#" srcset="assets/style/images/logo-light.png 1x, assets/style/images/logo-light@2x.png 2x" alt="" />
          </div>
          <!--/column -->
          <div class="col-md-4 text-center text-md-right">
            <ul class="social social-mute social-s mt-10">
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
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