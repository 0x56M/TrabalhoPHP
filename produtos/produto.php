<?php

//conectar ao banco
$conexao = new mysqli("127.0.0.1", "root", "", "lojacosmeticos");

$query = "SELECT * FROM produto";

//$resultado recebe o resultado da consulta no banco de dados
$resultado = $conexao->query($query);

?>