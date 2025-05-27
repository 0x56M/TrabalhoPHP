<?php
$conexao = new mysqli("127.0.0.1", "root", "", "lojacosmeticos");

$id = @$_GET['id'];

$sql = "SELECT * FROM produtos WHERE id = '$id'";
$resultado = $conexao->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    $produto = $resultado->fetch_assoc();
    echo "<h2>" . $produto['nome'] . "</h2>";
    echo "<img src='data:" . $produto['tipo'] . ";base64," . $produto['imagens'] . "' />";
    echo "<p>Preço: R$" . $produto['preco'] . "</p>";
    echo "<p>Descrição: " . $produto['descricao'] . "</p>";
} else {
    echo "Produto não encontrado.";
}

$conexao->close();
?>
