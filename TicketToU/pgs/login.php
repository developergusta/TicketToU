
<!DOCTYPE html>

<html>
    <head>
        <title>Login | Ticket 2 U</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/u-logo.png">

        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="../css/meuEstilo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../css/util2.css"> 
        <link rel="stylesheet" type="text/css" href="../css/main2.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        


        


    </head>
    <body> 

        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="../index.php">Ticket To U - Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="cadastro.php">
                      <img src="../img/icons8-usuário-40.png" alt=""/>
                      CADASTRO
                  </a>
            </li>
            </ul>
        </div>
      </div>
    </nav>
        

        <div class="limiter">
            <div class="container-login100" style="background-image: url('../img/wallpaper.jpg');">
                <main>
                    <div class="wrap-login100">
                        <form class="login100-form validate-form" method="POST" action="valida_usuario.php">
                            <?php
                            session_start();
                            if (isset($_SESSION['mensagem'])) {
                                $msg = $_SESSION['mensagem'];
                                echo '<p>
                                            <br><div class="alert alert-danger">' . $msg . '</div>
                                          </p>';
                                unset($_SESSION['mensagem']);
                            }
                            ?>
                            <span class="login100-form-logo">
                                <img src="../img/u-logo.png" alt="" width="60"/>						
                            </span>
                            <div id="titulo">
                                <span class="login100-form-title p-b-34 p-t-27">
                                    LOGIN
                                </span>
                            </div>                        

                            <div class="col-auto">
                                <label>Email</label>
                                <input name="txtEmail" class="form-control" placeholder="Insira seu email" type="text" id="email"><br>
                            </div>


                            <div class="col-auto">
                                <label>Senha</label>
                                <input name="txtSenha" type="password" class="form-control input-group-sm" id="senha" placeholder="Password"><br>
                            </div>
                            <a

                                <br>



                                <!---------LOGIN--------->

                                <div id="botao">
                                    <button type="submit" name="botao" class="botaoEnviar">ENTRAR</button>
                                </div>


                        </form> 

                    </div>
                </main>

                <section>
                    <a href="pgs/cadastro.php" role="button">
                        <button type="submit" class="myButton2">Ainda não possui uma conta? clique aqui para se cadastrar</button>
                    </a>
                    <div id="final">
                        <p>
                            Website Designs by <a title="E-Mail Me" href="mailto:olive.guga@gmail.com">Gustavo Oliveira</a> - <a title="Copyright Notice" href="#">Copyright © All Rights Reserved.</a>
                        </p>
                    </div>
                </section>
            </div>
        </div>




    </body>
</html>
