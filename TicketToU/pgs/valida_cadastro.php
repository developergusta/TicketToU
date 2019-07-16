<?php

include 'conecta.php';

session_start();

$nome = $_POST['cadNome'];
$email = $_POST['cadEmail'];
$senha = $_POST['cadSenha'];
$confSenha = $_POST['cadConfSenha'];
$sexo = $_POST['cadSexo'];
$datanasc = $_POST['cadNasc'];
$termos = $_POST['cadTermos'];



if (empty($nome)) {
    $_SESSION['mensagem'] = "Preencha o campo NOME";
    header("location: cadastro.php");
} else if (empty($sexo)) {
    $_SESSION['mensagem'] = "Marque a opção de sexo";
    header("location: cadastro.php");
} else if (empty($datanasc)) {
    $_SESSION['mensagem'] = "Preencha a data de nascimento";
    header("location: cadastro.php");
} else if (empty($email)) {
    $_SESSION['mensagem'] = "Preencha o campo EMAIL";
    header("location: cadastro.php");
} else if (empty($senha)) {
    $_SESSION['mensagem'] = "Preencha o campo SENHA";
    header("location: cadastro.php");
} else if ($confSenha != $senha) {
    $_SESSION['mensagem'] = "Atenção! A senha não coincide nos dois campos";
    header("location: cadastro.php");
} else if ($termos != 'yes') {
    $_SESSION['mensagem'] = "Você precisa concordar com os termos de uso!";
    header("location: cadastro.php");
} else {
    $sql = "INSERT INTO cadastro (nome, email, senha, sexo, data_nascimento, perfil)
         VALUES ('$nome', '$email', '$senha', '$sexo', '$datanasc', 'cliente')";
    if (mysqli_query($conectar, $sql)) {
        $sql = "INSERT INTO usuario (login, senha, perfil) values ('$email', '$senha', 'cliente');";
        if (mysqli_query($conectar, $sql)) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso! Faça o login para continuar.";
            $msg = $_SESSION['mensagem'];
            echo '<script>alert("' . $msg . '");</script>';

            header("location: login.php");
        }
    } else {
        echo "error: " . $sql . "<br>";
    }
}

