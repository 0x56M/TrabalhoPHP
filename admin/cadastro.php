<?php

  session_start();
  if(!isset($_SESSION['login']) || !isset($_SESSION['senha']))
  {
    header('location:index.html');
    exit();
  }
  session_unset();

?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Cosméticos
  </title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Cosméticos 
          </span>
        </a>
      </nav>
    </header>
  </div>

  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Área administrativa
        </h2>
      </div>
      <div class="heading_container ">
        <button style='margin-bottom: 10px; margin-right: 10px' type="submit">
          <a href="relatorio_vendas.php">Relatório de vendas</a>
        </button>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-md-6 col-lg-5 px-0">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="d-flex ">
              <button style='margin-bottom: 10px; margin-right: 10px' type="submit">
                <a href="categorias.php">Cadastrar categoria</a>
              </button>
              <button style='margin-bottom: 10px; margin-right: 10px' type="submit">
                <a href="alterar_categoria.php">Alterar categoria</a>
              </button>
              <button style='margin-bottom: 10px; margin-right: 10px' type="submit">
                <a href="excluir_categoria.php">Excluir categoria</a>
              </button>
              <button style='margin-bottom: 10px; margin-right: 10px' type="submit">
                <a href="produtos.php">Cadastrar produto</a>
              </button>
              <button style='margin-bottom: 10px; margin-right: 10px' type="submit">
                <a href="alterar_produto.php">Alterar produto</a>
              </button>
              <button style='margin-bottom: 10px; margin-right: 10px' type="submit">
                <a href="excluir_produto.php">Excluir produto</a>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="info_section layout_padding2-top">
    <div class="info_container">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h6>Sobre nós</h6>
            <p>
              Existimos para criar uma rotina skincare mais completa com a praticidade de fazer os pedidos com entrega garantida e rápida.
            </p>
          </div>
          <div class="col-md-6">
            <h6>Contato</h6>
            <ul style="list-style: none; padding: 0;">
              <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 10px;"></i>
                <span>Rua dos ladrilhos Jardim Terra do Nunca nº 2-55 </span>
              </li>
              <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <i class="fa fa-phone" aria-hidden="true" style="margin-right: 10px;"></i>
                <span>+01 12345678901</span>
              </li>
              <li style="display: flex; align-items: center;">
                <i class="fa fa-envelope" aria-hidden="true" style="margin-right: 10px;"></i>
                <span>cosmeticoscontato@gmail.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

  <style>
    .botao-link {
  display: inline-block;
  background-color: #f7444e;
  color: #fff;
  padding: 10px 20px;
  margin: 5px 10px 10px 0;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.botao-link:hover {
  background-color: #c6333d; 
  color: #fff;
}
</style>

</body>

</html>


