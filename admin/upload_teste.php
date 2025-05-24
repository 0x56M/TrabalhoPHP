<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    if ($_FILES['arquivo']['error'] !== 0) {
        echo "Erro no upload: " . $_FILES['arquivo']['error'];
    } else {
        echo "Upload bem-sucedido! Arquivo temporário: " . $_FILES['arquivo']['tmp_name'];
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo" />
    <button type="submit">Enviar</button>
</form>
