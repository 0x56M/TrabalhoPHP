<?php

    session_start();
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        header('location:index.html');
    }
    session_destroy();

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Cosméticos
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Cosméticos 
          </span>
        </a>
      </nav>
    </header>         </li>
          
    <!-- end header section -->
  </div>
  <!-- end hero area -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Área de cadastros
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-md-6 col-lg-5 px-0">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="d-flex ">
              <button type="submit">
                <a href="categorias.php">Cadastrar categoria</a>
              </button>
              <button type="submit">
                <a href="excluir_categoria.php">Excluir categoria</a>
              </button>
              <button type="submit">
                <a href="produtos.php">Cadastrar produto</a>
              </button>
              <button type="submit">
                <a href="produtos.php">Excluir produto</a>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section layout_padding2-top">
    <div class="info_container">
      <div class="container">
        <div class="row">
          <!-- Sobre nós -->
          <div class="col-md-6">
            <h6>Sobre nós</h6>
            <p>
              Existimos para criar uma rotina skincare mais completa com a praticidade de fazer os pedidos com entrega garantida e rápida.
            </p>
          </div>
          <!-- Contact Us -->
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

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>


</body>

</html>



