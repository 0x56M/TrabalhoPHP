<?php

session_start();

    //recebe os dados do produto
    $nome_produto = @$_POST['nome'];
    $preco_produto = @$_POST['preco'];
    $categoria_produto = @$_POST['categoria_id'];
    $imagem = @$_POST['imagem'];
    $tipo = @$_POST['tipo'];

    //$imagem_blob = base64_encode(file_get_contents($imagem));

    //inicializa o carrinho caso ele não esteja inicializado
    if(!isset($_SESSION['carrinho']))
    {
        $_SESSION['carrinho'] = array();
    }

    //Cria uma sessão para armazenar no carrinho os itens escolhidos
    //O operador "[]" adiciona o produto no próximo índice disponível no array
    if($nome_produto && $preco_produto && $categoria_produto && $imagem && $tipo)
    {
        $_SESSION['carrinho'][] = array
        (  
            'nome' => $nome_produto,
            'preco' => $preco_produto,
            'categoria_id' => $categoria_produto,
            'imagem' => $imagem,
            'tipo' => $tipo
        );
    }
    
    header('location:carrinho.php');


?>