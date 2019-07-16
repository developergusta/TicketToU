<?php

include "conecta.php";
include "valida_cadastro.php";

$nome = $_POST['nomeCompleto'];
$sexo = $_POST['optsexo'];
$datanasc = $_POST['datanasc'];
$email = $_POST['email'];
$senha = $_POST['senha'];

echo $nome.'<br>'.$sexo.'<br>';
echo $datanasc.'<br>'.$email.'<br>'.$senha;

$sql= "INSERT INTO cadastro (nome, email, senha, sexo, data_nascimento, perfil)
         VALUES ('$nome', '$email', '$senha', '$sexo', '$datanasc', 'cliente')"; 


if (mysqli_query($conectar, $sql)){
    echo "Cliente cadastrado com sucesso";
}
else{
    echo "error: " . $sql . "<br>";
}