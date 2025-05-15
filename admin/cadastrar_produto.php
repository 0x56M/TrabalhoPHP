<?php

    //1 - Recebendo itens e validando
    //O "@" serve para caso não existir o "nome" ele deixa um espaço em branco

    $nomeProduto = @$_POST["produto_nome"];
    $precoProduto = @$_POST["preco"];
    $imagem = @$_FILES["produto_arquivo"]["tmp_name"];
    $idCategoria = @$_POST["idCategoria"];
    $tipo = @$_FILES["produto_arquivo"]["type"];

    var_dump(@$_FILES["produto_arquivo"]);
    


    $imagem_blob = base64_encode(file_get_contents($imagem));

    //2 - Abrir uma conexão com o banco
    include("banco.php");

    //3 - Inserir no banco de dados

    $sql = "INSERT INTO produtos(nome, preco, categoria_id, imagens, tipo)
            VALUES ('$nomeProduto', '$precoProduto', '$idCategoria', '$imagem_blob', '$tipo')
            ";
        

    $conexao->query($sql);

    
header('location: cadastro.php');

/*<img src="data:<?php echo $tipo ?>;base64,<?php echo ($imagem_blob) ?>">*/

?>