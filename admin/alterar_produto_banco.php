<?php

include("banco.php");

$nome = @$_POST['nome'];
$preco = @$_POST['preco'];
$id = @$_POST['id'];

$sql = "UPDATE produtos
        SET nome = '$nome',
            preco = '$preco',
            id = '$id'
        WHERE id = '$id'";

$conexao->query($sql);

header('location:cadastro.php');

?>