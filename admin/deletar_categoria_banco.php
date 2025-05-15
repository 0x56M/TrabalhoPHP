<?php

include("banco.php");

$nome = @$_POST['categoria'];

$sql = "DELETE FROM categorias WHERE nome = '$nome'";

$conexao->query($sql);

header("location:cadastro.php");

?>