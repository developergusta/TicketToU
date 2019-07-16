<html>
    <head>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    
</html>

<?php
include 'conecta.php';

$id = $_POST["id_usuario"];
$nome = $_POST["txtnome"];
$email = $_POST["txtemail"];
$senha = $_POST["txtsenha"];
$sexo = $_POST["txtsexo"];
$nasc = $_POST['txtnasc'];
$perfil = $_POST['txtperfil'];


$sql = "UPDATE cadastro SET nome = '$nome', email = '$email', senha = '$senha', sexo = '$sexo', data_nascimento = '$nasc', perfil = '$perfil' where ID = '$id'";

$resultado = mysqli_query($conectar, $sql);


    if ($resultado == TRUE) {
        echo"<h2>Usuário atualizado com sucesso!</h2>" . "<br/>";
        echo'<a href="lista_banco.php">
            <input type="button" value="VOLTAR" class="btn btn-primary">
            </a>';
    } 
    else 
    {
        echo "Operação não realizada";
    }

mysqli_close($conectar);
?>
