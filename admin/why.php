<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

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
        <a class="navbar-brand" href="index.html"><span>Cosméticos</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item active"><a class="nav-link" href="shop.php">Sabonetes</a></li>
            <li class="nav-item"><a class="nav-link" href="why.php">Serums</a></li>
            <li class="nav-item"><a class="nav-link" href="testimonial.html">Feedbacks</a></li>
          </ul>
          <div class="user_option">
            <a href="carrinho.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <form class="form-inline">
            </form>
          </div>
        </div>
      </nav>
    </header>
  </div>



 <section class='shop_section layout_padding'>
                <div class='container'>
                  <div class='heading_center'>
                  <h2>Serums</h2>
                </div>
                  

 <?php

 $conexao = new mysqli("127.0.0.1", "root", "", "lojacosmeticos");

 $sql = "SELECT id, tipo, imagens, categoria_id, nome, preco FROM produtos WHERE categoria_id = '16'";

 $resultado = $conexao->query($sql);



if ($resultado && $resultado->num_rows > 0)
    {
      while ($linha = $resultado->fetch_assoc())
    {
       $imagem64 = base64_encode($linha['imagens']);
        echo    "<div style='display: inline-block'>
                  <div style='width: 200px'>
                  <div class='box'>
                        <form method='POST' action='adicionar_carrinho.php' enctype='multipart/form-data'>
                          <input type='hidden' name='nome' value='" . $linha['nome'] . "'>
                          <input type='hidden' name='preco' value='" . $linha['preco'] . "'>
                          <input type='hidden' name='categoria_id' value='" . $linha['categoria_id'] . "'>
                          <input type='hidden' name='tipo' value='" . $linha['tipo'] . "'>
                          <input type='hidden' name='id' value='" . $linha['id'] . "'>
                          <input type='hidden' name='imagem' value='" . $linha['imagens'] . "'>
                          <button type='submit' class='add-to-cart-btn'>Adicionar</button>
                        </form>
                        <a href='detalhes_produto.php?id=" . $linha['id'] . "'>
                          <div class='img-box'>
                            <img src='data:" . $linha['tipo'] . ";base64," . $linha['imagens'] . "' />
                          </div>
                          <div class='detail-box'>
                            <h6>" . $linha['nome'] . "</h6>
                            <h6><span>R$</span>" . $linha['preco'] . "</h6>
                          </div>
                          <div class='new'><span>New</span></div>
                        </a> 
                  </div>
                  </div>
                  </div>
                  ";
    }
}
else
{
  echo "<br><br>Não há produtos na categoria Sabonetes";
}

$conexao->close();

?>
                </div>
</section>;

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

  <style>
    .add-to-cart-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      background-color:rgb(39, 97, 255);
      color: white;
      border: none;
      padding: 5px 10px;
      font-size: 12px;
      border-radius: 5px;
      cursor: pointer;
      z-index: 10;
      transition: all 0.3s;
    }

    .add-to-cart-btn:hover {
      background-color: #c6333d;
    }

    .box {
      position: relative;
      overflow: hidden;
    }

    .img-box {
      position: relative;
      padding-bottom: 100%;
    }
  </style>

</body>

</html>
