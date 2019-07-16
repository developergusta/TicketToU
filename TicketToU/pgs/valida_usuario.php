<?php

include 'conecta.php';

session_start();

$email = $_POST['txtEmail'];

$senha = $_POST['txtSenha'];

if(empty($email))
{
    $_SESSION['mensagem']="preencha o campo Login";
    header("location: login.php");
}

else if (empty ($senha))
{
    $_SESSION['mensagem']="preencha o campo Senha";
    header("location: login.php");
}

else{
    $sql = "SELECT * FROM usuario WHERE login = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conectar, $sql);
    $dados = mysqli_fetch_assoc($resultado);  
    
    
    if(($dados['login']) == $email and $dados['senha'] = $senha){
        
        $usuario = array ("login" => $dados['login'], "senha" => $dados['senha'], "perfil"=>['perfil']);
        
        $_SESSION['usuario'] = $usuario;
        
        header("Location: ../index.php");
        
    }
    
    else{
        
        $_SESSION['mensagem']="login ou senha inválido";
        
        header("Location: login.php");
        
    }
}