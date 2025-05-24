<?php

session_start();

$conexao = new mysqli("127.0.0.1", "root", "", "lojacosmeticos2");

$login = @$_POST['login'];
$senha = @$_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";

$resultado = $conexao->query($sql);

    if($resultado->num_rows > 0)
    {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header("location:cadastro.php");
    }
    else
    {
        session_unset();
        session_destroy();
        header('location:login.php');
        exit();
    }

?>
