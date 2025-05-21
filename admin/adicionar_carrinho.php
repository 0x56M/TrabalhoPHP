<?php

session_start();

    //recebe os dados do produto
    $nome_produto = @$_POST['nome'];
    $preco_produto = @$_POST['preco'];
    $categoria_produto = @$_POST['categoria_id']

    //inicializa o carrinho caso ele não esteja inicializado
    if(!isset($_SESSION['carrinho']))
    {
        $_SESSION['carrinho'] = array();
    }

    //Cria uma sessão para armazenar no carrinho os itens escolhidos
    //O operador "[]" adiciona o produto no próximo índice disponível no array
    $_SESSION['carrinho'][] = array
    (
        'categoria_id' => $categoria_produto,
        'nome' => $nome_produto,
        'preco' => $preco_produto
    );
    


?>