<?php

    /* 
       1 - Receber os dados do formulário
       2 - Abrir uma conexão com o banco
       3 - Inserir os dados
        3.1 - insert into aluno() values()
       4 - Redirecionar o usuário para aluno_consulta.php
    */

    //1 - Recebendo itens e validando
    //O "@" serve para caso não existir o "nome" ele deixa um espaço em branco
    $ra = @$_POST["ra"];
    $nome = @$_POST["nome"];
    $curso = @$_POST["curso"];

    if($nome == "")
    {
        echo "O nome é obrigatório";
        exit;
    }
    if($curso == "")
    {
        echo "O curso é obrigatório";
        exit;
    }
    if($ra == "")
    {
        echo "O RA é obrigatório";
        exit;
    }

    //2 - Abrir uma conexão com o banco
    include("banco.php");

    //3 - Inserir no banco de dados
    $sql = "INSERT INTO alunos (ra, nome, curso)
            VALUES ($ra, '$nome', '$curso')
            ";

    $conex->query($sql);
    
    header('location: aluno_consulta.php');

?>