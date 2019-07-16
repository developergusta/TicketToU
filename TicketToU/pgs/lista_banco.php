
<?php
include "conecta.php";

$sql = "SELECT * FROM cadastro";

$resultado = mysqli_query($conectar, $sql);
?>

<doctype html>
    <html>
        <head>
            <title>Gestão de Usuários</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <link href="../css/styleTable.css" rel="stylesheet" type="text/css"/>
        </head>
        <body>
            <h1>Usuários Cadastrados</h1>
            
            <table class = "table ">
                <thead class="thead-dark">    
                <tr>
                    <th class = "tg-0pky">Atualizar</th>
                    <th class = "tg-0pky">Excluir</th>
                    <th class = "tg-0pky">Nome</th>
                    <th class = "tg-0pky">Email</th>
                    <th class = "tg-0pky">Senha</th>
                    <th class = "tg-0pky">Sexo</th>
                    <th class = "tg-0pky">Data de Nascimento</th>
                    <th class = "tg-0pky">perfil</th>
                    </tr>
                    
                </thead>
                    

                <?php
                while ($usuarios = mysqli_fetch_assoc($resultado)) {

                    echo "<tr>";
                    //passa como parametro via $_GET o id de cada cliente
                    
                    echo "<td><a href='atualiza.php?id_usuario=$usuarios[ID]'><button class='btn btn-primary'>atualizar</button></a></td>";
                    echo "<td><a href='confirma_excluir.php?id_usuario=$usuarios[ID]'><button class='btn btn-primary'>excluir</button></a></td>";
                    
                    
                    //Exibe nome e email do usuario
 
                    echo"<td>" . $usuarios['nome'] . "</td>";
                    echo"<td>" . $usuarios['email'] . "</td>";
                    echo"<td>" . $usuarios['senha'] . "</td>";
                    echo"<td>" . $usuarios['sexo'] . "</td>";
                    echo"<td>" . $usuarios['data_nascimento'] . "</td>";
                    echo"<td>" . $usuarios['perfil'] . "</td>";
                    echo "</tr>";
                }

                mysqli_close($conectar);
                ?>

            </table>
        </body>
    </html>
</doctype>