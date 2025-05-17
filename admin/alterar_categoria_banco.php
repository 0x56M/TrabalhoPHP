<?php

include("banco.php");

$nome = @$_POST['categoria'];
$id = @$_POST['id'];

$sql = "UPDATE categorias
        SET nome = '$nome',
            id = '$id'
        WHERE id = '$id'";

$conexao->query($sql);

header('location:cadastro.php');

?>