<?php

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

    if($login == 'admin' and $senha == 'admin')
    {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header("location:/TrabalhoPHP/admin/cadastro.php");
    }
    else
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:login.php');
    }

?>
