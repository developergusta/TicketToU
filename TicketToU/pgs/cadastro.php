<!DOCTYPE html>

<html>
    <head>
        <title>Cadastre-se - Ticket 2 U</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../img/u-logo.png">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
        <script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../css/util2.css" rel="stylesheet" type="text/css"/>
        <link href="../css/main2.css" rel="stylesheet" type="text/css"/>
    </script>

</head>
<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="../index.php">Ticket To U</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="login.php">
                      <img src="../img/icons8-usuário-40.png" alt=""/>
                      LOGIN
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
                    <div id="formulario">
                        <form action="valida_cadastro.php" method="post" class="login100-form validate-form">
                            <span class="login100-form-logo">
                                <img src="../img/u-logo.png" alt="" width="60"/>						
                            </span>
                            <div id="titulo">
                                <span class="login100-form-title p-b-34 p-t-27">
                                    CADASTRO
                                </span>
                            </div> 
                            <br>
                            <?php
                                session_start();
                                if (isset($_SESSION['mensagem'])) {
                                    $msg = $_SESSION['mensagem'];
                                    echo '<p>
                                            <br><div class="alert alert-danger">
                                            <strong>Atenção</strong> ' . $msg . '</div>
                                          </p>';
                                    unset($_SESSION['mensagem']);
                                }
                                ?>
    <!--------------------------- INSERIR NOME ---------------------------> 
                            <div class="col-xs-4">
                                <label>Nome Completo</label>
                                <input class="form-control" type="text" id="nomeCompleto" name="cadNome"><br>
                            </div>
    <!--------------------------- INSERIR SEXO ---------------------------> 
                            <div id="sexo">
                                <label>Sexo:</label>                            
                                <div class="radio">
                                    <div id="masculino" class="form-inline">
                                        <div class="radio-inline">
                                            <img src="../img/icon-masculino.png" alt="Masculino" width="30"/>
                                            <input type="radio" name="cadSexo" value="male" ><a>Masculino</a>
                                        </div></div>
                                    <div id="feminino" class="form-inline">
                                        <img src="../img/icon-feminino.png" alt="Feminino" width="30"/>
                                        <div class="radio-inline">
                                            <input type="radio" name="cadSexo" value="female" ><a>Feminino</a>
                                        </div>
                                    </div>
                                    <div id="outro">

                                        <div class="radio-inline" >
                                            <img src="../img/icon-outro.png" alt="Outro" width="30" />
                                            <input type="radio" name="cadSexo" value="other"><a>Outro</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

    <!--------------------------- INSERIR DATA DE NASCIMENTO ---------------------------> 

                            <div class="col-8">
                                <label>Data de nascimento</label>
                                <input class="form-control" type="date" name="cadNasc" placeholder="00/00/0000"><br>
                            </div>
    <!--------------------------- INSERIR EMAIL ---------------------------> 
                            <div class="col-auto">
                                <label>Email</label>
                                <input class="form-control" placeholder="Insira seu email" type="text" name="cadEmail" id="email"><br>
                            </div>
    <!--------------------------- INSERIR SENHA ---------------------------> 

                            <div class="col-auto">
                                <label>Senha</label>
                                <input type="password" class="form-control input-group-sm" name="cadSenha" id="senha" placeholder="Password"><br>
                            </div>
    <!--------------------------- CONFIRMAR SENHA ---------------------------> 
                            <div class="col-auto">
                                <label>Confirme sua senha</label>
                                <input class="form-control" type="password" name="cadConfSenha" id="confSenha"><br>
                            </div>
                            <div id ="termos">
                                <div class="form-group">
                                    <label>Termos de uso</label>
                                    <textarea disabled class="form-control">
I – Aceite de uso
Ao fornecer informações pessoais ou navegar no portal, o usuário concorda automaticamente com as regras de utilização, proteção e segurança abaixo estabelecidas. O usuário aceita que é proibido:
                 
Prejudicar direitos e interesses de terceiros;
Inutilizar, modificar ou impedir, em todo ou em parte, qualquer área do site;
Tentar violar os meios técnicos de proteção ao conteúdo do site.
                   
Nas áreas onde existe troca de informações, o usuário concorda que é proibido difundir, disponibilizar ou transmitir conteúdo que:
                                      
Ameace a integridade física, moral e psicológica de qualquer pessoa;
Contrarie o disposto na Constituição Federal Brasileira e nas Convenções Internacionais no que diz respeito aos direitos fundamentais;
Promova atos que contenham calúnia, difamação e injúria;
Induza qualquer tipo de discriminação, seja ela racial, étnica, religiosa, etária, social ou de qualquer outro tipo;
Difunda serviços ilegais, violentos, imorais, pornográficos ou degradantes;
Induza a erro sobre o verdadeiro teor da vontade do usuário, utilizando-se de informações falsas, imprecisas ou confusas;
Esteja protegido pelo direito de autoria e propriedade;
Tenha qualquer tipo de vírus ou ameaça que prejudique o pleno funcionamento do site e/ou do equipamento de terceiros.
                                        
II – Privacidade
O site Gerador de Player assegura que as informações fornecidas pelo usuário no Portal serão usadas apenas para:
                                       
Atender o fim para o qual elas foram fornecidas;
Divulgar mudanças e novidades nos serviços em que o usuário se cadastrou para usar;
Aprimorar os conteúdos oferecidos e oferecer serviços personalizados;
Enviar outras informações de divulgação institucional, desde que expressamente autorizado pelo usuário.
                                        
Cabe ao usuário prestar informações verídicas e completas para o atendimento de sua demanda.
O Gerador de Player se compromete a não fornecer dados pessoais do usuário, nem seu(s) endereço(s) de e-mail ou qualquer outra informação sigilosa recolhida no Portal sem sua autorização, bem como a não divulgar informações que possam identificá-lo (exceção para o nome, nos casos e seções do Portal em que o próprio usuário aceite a divulgação ou a faça espontaneamente). O Gerador de Player também poderá fornecer dados pessoais no caso de obrigação legal, eventual ação judicial ou mediante requisição de autoridade competente.
Poderão ser divulgados dados genéricos e agregados, referentes à quantidade de pessoas que acessam áreas do Portal.
                                        
III – E-mail e senha de acesso
A utilização dos serviços restritos está condicionada ao cadastro de um e-mail e de uma senha. O cadastro deverá ser confirmado pelo usuário através de e-mail enviado pelo Gerador de Player para o endereço eletrônico informado.
O acesso a informações pessoais do usuário poderá ser feito somente por meio desse e-mail e dessa senha, evitando assim que pessoas não autorizadas tenham acesso aos dados.
A senha poderá ser alterada pelo usuário a qualquer momento.
                                        
IV – Recursos de interatividade e boletins
Novos serviços, assuntos ou boletins poderão ser acrescentados ao Portal. O usuário poderá, a qualquer momento, modificar suas preferências de assinatura de boletins e serviços, acessando a página destinada a esse fim e seguindo as instruções específicas.
A participação em enquetes é anônima. Toda enquete é apenas uma amostragem de opinião. Não há precisão científica na apuração dos resultados.
Comentários postados passam a fazer parte do Portal permanentemente e são de exclusiva responsabilidade dos seus autores. A Assembleia de Minas se reserva o direito de moderar, prévia ou posteriormente, conteúdos postados pelo usuário, de forma a garantir a observância do disposto no item I.
                                        
V– Denúncia
Onde há a possibilidade de denunciar conteúdo publicado por usuários, qualquer um, ao constatar violação dos termos de uso, poderá utilizar os recursos disponíveis no Portal para informar sobre o material indevido.
A denúncia não garante a imediata remoção. O aviso será analisado por equipe competente e, constatando-se a violação dos termos de uso, o denunciado será avisado da retirada do conteúdo. Caso a denúncia não seja comprovada, os dados publicados serão mantidos e apenas o denunciante será avisado da decisão.
                                        
VI – Segurança e proteção de informações do usuário
As informações do usuário serão armazenadas em um servidor seguro e, sempre que houver necessidade de identificação ou fornecimento de informações sigilosas, a transmissão de dados entre o computador e o Portal do Gerador de Player será realizada através de conexão segura, com criptografia de dados.
                                        
VII – Inatividade
Por razões de segurança, o site Gerador de Player automaticamente cancelará a sessão do usuário logado após 15 minutos de inatividade.
                                        
VIII – Direitos autorais
A marca Gerador de Player – Poder e Voz do Cidadão é de propriedade da Gerador de Player, sendo totalmente proibida sua reprodução, cópia ou modificação sem expressa autorização da instituição.
Para utilização por terceiros de conteúdos do Portal, é necessário citar a fonte, respeitando as leis referentes as direitos autorais.
                                        
IX – Sites de terceiros
As regras sobre privacidade dispostas nesse documento aplicam-se apenas ao site Gerador de Player. Elas não valem para sites externos indicados por meio de links. É preciso que o usuário se informe sobre a política de privacidade de cada um deles antes de fornecer qualquer tipo de informação.

– Alterações na política de privacidade
O site Gerador de Player reserva-se o direito de, a qualquer momento, modificar, alterar, acrescentar ou remover partes desta política de privacidade, atribuindo-se o dever de assegurar o sigilo, a proteção e a segurança dos dados e informações pessoais ou privados dos usuários.
                                    </textarea>
                                </div>
                                <div class="form-inline">
                                    <input type="checkbox" name="cadTermos" value="yes">
                                    <label>  Concordo com os termos de uso</label>
                                </div>
                            </div>

                            <br>
                                                       
                            <div id="botao">
                                <button type="submit" name="botao" class="botaoEnviar">CADASTRAR</button>
                            </div>
                        </form>
                    </div>
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
