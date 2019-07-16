<?php

include "conecta.php";

$id = $_GET["id_usuario"];

$sql = "DELETE from cadastro where ID = $id";

$resultado = mysqli_query($conectar, $sql);

$linhas= mysqli_affected_rows($conectar);

if ($linhas===1){
    header("Location: lista_banco.php");
}

else{
    echo "Operação não realizada!";
}