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
    <a href="aluno_novo.php"><button type="button" class="btn btn-warning">Novo cadastro</button> </a>
    

        <div>
            <form action="aluno_novo.php" method="get">
                <input type="text" class="form-control" name="nome">
                <input type="submit" value="Pesquisar">
            </form>
        </div>

    <table class="table table-hover">
        <thead>
            <td>RA</td>
            <td>Nome</td>
            <td>Data de nascimento</td>
            <td>Curso</td>
            <td>Opções</td>
        </thead>
        <tbody>
            
                <?php
                        //conectar ao bd        //1 - ip 2 - usuario 3 - senha 4 - banco de dados 
                        $conexao = new mysqli("127.0.0.1","root","","faculdade");

                        $nome = 

                        $query = "select * from alunos
                                    ";

                        //a função "query" espera uma query como parâmetro
                        $resultado = $conexao->query($query);

                        echo "Foram encontrados $resultado->num_rows alunos <br>";

                        //pego a primeira linha do $resultado e jogo na variável $linha
                        foreach($resultado as $linha)
                        {
                            echo "<tr>
                                <td>", $linha["ra"],"</td>
                                <td>", $linha["nome"],"</td>
                                <td>", $linha["data_nasc"],"</td>
                                <td>", $linha["curso"],"</td>
                                <td>", $linha["ra"],"</td>
                                <td> <a href='/Aula13/outros/aluno_excluir.php?ra=", $linha["ra"],"'class='btn btn-danger'>🗑️</a> </td>
                                <td> <a href='/Aula13/outros/aluno_alterar.php?ra=", $linha["ra"],"'class='btn btn-primary'>✏️</a> </td>
                                </tr>";
                        }
                ?>
        </tbody>
    </table>
    
</body>
</html> 