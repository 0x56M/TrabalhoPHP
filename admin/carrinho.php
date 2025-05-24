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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">
                Sabonetes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.php">
                Serums
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonial.html">
                Feedbacks
              </a>
            </li>
          </ul>
          <div class="user_option">
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
            </form>
          </div>
        </div>
      </nav>
    </header>

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Carrinho
        </h2>
      </div>

<?php

session_start();

include("banco.php");

$total = 0;

$sql = "SELECT id, tipo, imagens, nome, preco FROM produtos";

if (isset($_SESSION['carrinho']) && is_array($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0) {
    foreach($_SESSION['carrinho'] as $indice => $produto)
{
   $total += $produto['preco'];

        echo      "<div style='display: inline-block'>
                  <div style='width: 200px'>
                  <div class='box'>
                  <form method='POST' action='remover_carrinho.php'>
                  <input type='hidden' name='indice' value='$indice'>
                  <button type='submit' class='btn btn-danger'>Remover</button>
                  </form>
                        <a href=''>
                          <div class='img-box'>
                            <img src='data:" . $produto['tipo'] . ";base64," . $produto['imagem'] . "' />
                          </div>
                          <div class='detail-box'>
                            <h6>" . $produto['nome'] . "</h6>
                            <h6>R$<span></span>" . number_format($produto['preco'], 2, ',', '.') . "</h6>
                          </div>
                        </a> 
                  </div>
                  </div>
                  </div>
                  ";
    }
    echo "<div style='margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;'>
        Total: R$ " . number_format($total, 2, ',', '.') . "
        <form action='finalizar_compra.php' method='POST' style='display: inline-block; margin-left: 40px; margin-bottom:40px'>
          <button type='submit' class='btn btn-success'>Comprar</button>
      </div>";
  }
else 
{
    echo "<p style='text-align: center; font-size: 18px;'>Seu carrinho está vazio.</p>";
}

?>

    <section class="info_section layout_padding2-top">
        <div class="info_container">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h6>Sobre nós</h6>
                <p>Existimos para criar uma rotina skincare mais completa com a praticidade de fazer os pedidos com entrega garantida e rápida.</p>
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
      </section>

      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>

  </body>
  </html>