<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <form action="aluno_novo_salvar.php" method="post">
        <div>
            <span>Nome do aluno</span>
            <input type="text" name="nome"/>
        </div>
        <div>
            <span>Curso</span>
            <input type="text" name="curso"/>
        </div>
        <div>
            <span>RA</span>
            <input type="number" name="ra"/>
        </div>
        <div>
            <input type="submit" value="Clica aqui não" class="btn btn-danger"/>
            <a href="aluno_consulta.php" class="btn btn-danger">Aqui também não</a>
            
        </div>
    </form>
    
</body>
</html>