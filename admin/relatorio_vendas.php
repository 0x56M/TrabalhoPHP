<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
  <title>Cosméticos</title>

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>Cosméticos</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main class="container mt-4">
      <h2>Vendas Registradas</h2>

      <?php
      $host = 'localhost';
      $banco = 'lojacosmeticos';
      $usuario = 'root';
      $senha = '';
      $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);

      //verifica se o id existe, e exclui os itens da venda e as vendas
      if (isset($_POST['delete_id']))
      {
        $id = $_POST['delete_id'];
        $conexao->query("DELETE FROM vendas_itens WHERE venda_id = $id");
        $conexao->query("DELETE FROM vendas WHERE id = $id");
        echo "<div class='alert alert-success'>Venda ID $id e seus itens foram excluídos com sucesso!</div>";
      }

      //verificar se o id e a data existe e atualiza os dois
      if (isset($_POST['update_id']) && isset($_POST['nova_data'])) 
      {
        $id = $_POST['update_id'];
        $nova_data = $_POST['nova_data'];
        $conexao->query("UPDATE vendas SET data_venda = '$nova_data' WHERE id = $id");
        echo "<div class='alert alert-info'>Venda ID $id atualizada!</div>";
      }

      //faz o select para depois exibir na tela
      $sql = "SELECT id, data_venda FROM vendas";
      $resultado = $conexao->query($sql);
      $vendas = $resultado->rowCount();

      echo "<p>Total de vendas realizadas: <strong>$vendas</strong></p>";

      //verifica se a consulta é maior que 0 e se for, exibe na tela as informações das vendas
      if ($vendas > 0) 
      {
        foreach ($resultado as $linha) 
        {
          $id = $linha['id'];
          $data = $linha['data_venda'];
          echo "<div class='border p-2 mb-3'>
                  <p><strong>ID:</strong> $id<br><strong>Data:</strong> $data</p>

                  <form method='POST' onsubmit=\"return confirm('Tem certeza que deseja excluir esta venda?')\" style='display:inline-block;'>
                    <input type='hidden' name='delete_id' value='$id'>
                    <button type='submit' class='btn btn-danger btn-sm'>Excluir</button>
                  </form>

                  <form method='POST' class='mt-2'>
                    <input type='hidden' name='update_id' value='$id'>
                    <input type='datetime-local' name='nova_data' required class='form-control mb-1' value='" . date('Y-m-d\TH:i', strtotime($data)) . "'>
                    <button type='submit' class='btn btn-warning btn-sm'>Atualizar</button>
                  </form>
                </div>";
        }
      }
      else 
      {
        echo "<p style='color:red;'>⚠ Nenhuma venda encontrada na tabela.</p>";
      }
      ?>
    </main>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>
