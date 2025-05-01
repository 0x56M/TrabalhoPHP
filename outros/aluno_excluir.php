<?php

include("banco.php");

    /*
    http://127.0.0.1/Aula13/outros/aluno_alterar.php?ra=111111111

        1 - Receber via GET o RA do aluno
        2 - Buscar o aluno no banco
        3 - Iremos mostrar os dados dele na tela dentro do form
        4 - Enviar os dados alterados para o servidor salvar
    */

    $ra = @$_GET["ra"];

    $sql = "DELETE FROM alunos
            WHERE ra = '$ra'";

    $resultado = $conex->query($sql);

    //$dados = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração do aluno<?php echo $dados["nome"] ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <form action="aluno_alterar_salvar.php" method="post">
        <div>
            <span>Digite o RA do aluno a ser deletado</span>
            <input type="number" name="ra"
                value="<?php echo $dados["ra"]; ?>"
            />
        </div>
        <div>
            
            <a href="aluno_consulta.php" class="btn btn-danger">Clica aqui para deletar</a>
            
        </div>
    </form>
    
</body>
</html>