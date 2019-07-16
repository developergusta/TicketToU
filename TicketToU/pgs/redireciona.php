<?php
session_start();
$usuario = $_SESSION['usuario'];
?>

<html>
    <head>
        <title>Pagina Principal</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php 
            if ($usuario ['perfil'] == "adm"){
                header("location: admin.php");
            }else{
                header("location: principal.php");
            }
?>
    </body>
</html>