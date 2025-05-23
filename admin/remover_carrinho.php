<?php

    session_start();

    //$indice recebe a posição do indice que está o item
    $indice = @$_POST['indice'];

    //Verifica se existe um item no carrinho
    if(isset($_SESSION['carrinho'][$indice]))
    {
        //Exclui a sessão do item no valor do $indice
        unset($_SESSION['carrinho'][$indice]);
    }

    //Organiza a posição dos índices para quando for excluído um item
    $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);

    header('location:carrinho.php');
    exit();

?>