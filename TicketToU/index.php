<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>Ticket To U | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
    <link href="css/cssPagPrincipal.css" rel="stylesheet" type="text/css"/>    
    <link href="css/full-slider.css" rel="stylesheet" type="text/css"/>
    <?php  session_start();
    if (isset($_SESSION['usuario'])) 
        {    
        $usuario = $_SESSION['usuario'];  
        }
    ?>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Ticket To U</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <?php
                  if(empty($usuario)){
                  echo'<a class="nav-link js-scroll-trigger" href="pgs/login.php">
                      <img src="img/icons8-usuário-40.png" alt=""/>
                      LOGIN/CADASTRO
                  </a>';}
                  else{
                        echo '  <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="#about">Bem Vindo(a) '.$usuario["login"].'</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="pgs/logout.php">LOGOUT</a>
                                </li>';
                  }
                  ?>        
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#projects">Eventos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Tomorrowland</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">O evento mais esperado no mundo da Eletronic Dance Music</h2>
                    <a href="pgs/ing_tomorrowland.php" class="btn btn-primary js-scroll-trigger">Comprar Ingressos</a>
                </div>
            </div>
        </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class ="fontSobre">
                            <h2 class="text-white mb-4">Ticket To Ü</h2>
                            <p class="text-white-50">DESDE 2018 TRANSFORMANDO O SEU SONHO EM INGRESSOS </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    <!-- Projects Section -->
        <section id="projects" class="projects-section bg-light">
            <div class="container">

                <!-- Featured Project Row -->
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-12 col-lg-7">

                        <div class="col-xl-4 col-lg-5">
                            <div class="featured-text text-center text-lg-left">
                                <h4>Estes são os eventos em destaques da semana</h4>

                            </div>
                        </div>

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <!-- Slide One - Set the background image for this slide in the line below -->
                                <div class="carousel-item active" style="background-image: url('http://www.regiaonews.net/wp-content/uploads/2017/05/festa-do-pe%C3%A3o-barretos.jpg')">
                                    <div class="carousel-caption d-none d-md-block">

                                        <h3>Festa do Peão 2018 - Barretos</h3>
                                        <p>A Festa do Peão de Barretos é uma festa do peão de boiadeiro que acontece todos os anos na cidade de Barretos, no estado de São Paulo</p>
                                        <a href="#about" class="btn btn-primary js-scroll-trigger">Comprar Ingressos</a>
                                    </div>
                                </div>
                                <!-- Slide Two - Set the background image for this slide in the line below -->
                                <div class="carousel-item" style="background-image: url('http://www.gilgiardelli.com.br/revolucao/wp-content/uploads/2016/02/12605347_10205661244067338_495711417234706894_o.jpg')">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Burning Man</h3>
                                        <p>Burning Man é um evento de experimento social colaborativo e de comunidade, podemos dizer também que é um evento de contracultura</p>
                                        <a href="#about" class="btn btn-primary js-scroll-trigger">Comprar Ingressos</a>
                                    </div>
                                </div>
                                <!-- Slide Three - Set the background image for this slide in the line below -->
                                <div class="carousel-item" style="background-image: url('https://s2.glbimg.com/6M-AN4OT4Sme7KcxN7diJv6ynyk=/1200x/smart/filters:cover():strip_icc()/s.glbimg.com/es/ge/f/original/2018/11/29/river_e_boca_no_bernabeu.jpg')">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Final - Libertadores 2018</h3>
                                        <p>River Plate e Boca Junior se enfrentam no segundo jogo da final da Copa Libertadores da América 2018</p>
                                        <a href="pgs/ing_libertadores2018.php" class="btn btn-primary js-scroll-trigger">Comprar Ingressos</a>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>



                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top" src="img/tomorrowland.jpg" alt="">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="pgs/ing_tomorrowland.php">Tomorrowland</a>
                                </h4>
                                <p class="card-text">Tomorrowland 2018 - Bélgica - Dias 27, 28 e 29 de Novembro</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="https://s2.glbimg.com/6M-AN4OT4Sme7KcxN7diJv6ynyk=/1200x/smart/filters:cover():strip_icc()/s.glbimg.com/es/ge/f/original/2018/11/29/river_e_boca_no_bernabeu.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="pgs/ing_libertadores2018.php">Final - Libertadores</a>
                                </h4>
                                <p class="card-text">River Plate e Boca Junior se enfrentam no segundo jogo da final da Copa Libertadores da América 2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlNkS-XOQvNqtoXcv7elBLZU7Tgsc9whJo5CcFMgjiurRZ2lvl" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Vacaloca - Matheus e Kauan</a>
                                </h4>
                                <p class="card-text">Vacaloca Multishow apresenta: Matheus e Kauan dia 29/11 - sexta-feira das 21h às 4h</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="https://cdn.phouse.com.br/wp-content/uploads/2016/03/30082502/ultra-.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="pgs/ing_ultra_music.php">Ultra Music</a>
                                </h4>
                                <p class="card-text">Ultra Music Festival é um festival de música eletrônica ao ar livre realizado anualmente em março, na cidade de Miami</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="https://confiramais.com.br/wp-content/uploads/2014/11/rock-in-rio-2017-luck-veloso-logo-palco-sunset-1-720x430.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Rock in Rio</a>
                                </h4>
                                <p class="card-text">O Rock in Rio é um festival de música realizado na cidade do Rio de Janeiro</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="https://i.forbesimg.com/media/video/2016/02/02/4734548371001_still.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Super Bowl 50</a>
                                </h4>
                                <p class="card-text">Final do maior torneio de futebol americano do mundo</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Project One Row -->
                <br>
                <h1>Em breve...</h1>
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="https://correio-cdn1.cworks.cloud/fileadmin/_processed_/8/e/csm_reveillon_b182a67078.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Camarote Salvador - Reveillón</h4>

                                    <hr class="d-none d-lg-block mb-0 ml-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Two Row -->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="http://www.ticketrio.com.br/site/wp-content/uploads/2013/11/CARNAVAL-2012-6.jpg" alt="">
                    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Camarote Carnaval</h4>

                                    <hr class="d-none d-lg-block mb-0 mr-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    <!-- Signup Section -->
        <section id="signup" class="signup-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">

                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Se inscreva para receber novidades!</h2>

                        <form class="form-inline d-flex">
                            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Insira seu email...">
                            <button type="submit" class="btn btn-primary mx-auto">Inscrever-se</button>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section bg-black">
            <div class="container">

                <div class="row">

                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Endereço</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">Rua Regina Cabalau Mendonça, Suzano - SP</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">
                                    <a href="#">olive.guga@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Telefone</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">+55 (11) 94585-3707</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="social d-flex justify-content-center">
                    <a href="#" class="mx-2">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="mx-2">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="mx-2">
                        <i class="fab fa-github"></i>
                    </a>
                </div>

            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-black small text-center text-white-50">
            <div class="container">
                Copyright &copy; Ticket To U 2018
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/grayscale.min.js"></script>

    </body>

</html>
