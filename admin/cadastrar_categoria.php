<?php

    //1 - Recebendo itens e validando
    //O "@" serve para caso não existir o "nome" ele deixa um espaço em branco

    $nomeCategoria = @$_POST["categoria"];


    //2 - Abrir uma conexão com o banco
    include("banco.php");

    //3 - Inserir no banco de dados

    $sql = "INSERT INTO categorias(nome)
            VALUES ('$nomeCategoria')
            ";
    
    $conexao->query($sql);

    
    header('location: cadastro.php');

?>