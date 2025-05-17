<?php

include("banco.php");

$nome = @$_POST['produto'];

$sql = "DELETE FROM produtos WHERE nome = '$nome'";

$conexao->query($sql);

header("location:cadastro.php");

?>