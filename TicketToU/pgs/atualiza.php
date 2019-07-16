<?php
include "conecta.php";

$id_usuarios = $_GET["id_usuario"];

$sql = "SELECT * FROM cadastro where id = $id_usuarios";

$resultado = mysqli_query($conectar, $sql);

$usuarios = mysqli_fetch_assoc($resultado);

mysqli_close($conectar);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Manter Usuarios</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Atualização de dados do usuário</h1>
        <form action="atualiza_banco.php" method="POST">
            
            
            <input type="hidden" name="id_usuario" value="<?php print($usuarios['ID']) ?>">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="txtnome" value="<?php print($usuarios['nome']) ?>" >
            </div>
            
            
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="txtemail" value="<?php print($usuarios['email']) ?>">
            </div>
            
            
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Senha</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="txtsenha" value="<?php print($usuarios['senha']) ?>" >
            </div>
            
            
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Sexo</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="txtsexo" value="<?php print($usuarios['sexo']) ?>" >
            </div>
            
            
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de nascimento</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="txtnasc" value="<?php print($usuarios['data_nascimento']) ?>" >
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Perfil</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="txtperfil" value="<?php print($usuarios['perfil']) ?>" >
            </div>
            
            
            <input type="submit" value="Atualizar" class="btn btn-primary">
        </form>
    </body>
</html>