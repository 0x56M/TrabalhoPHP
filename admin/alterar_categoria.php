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
    </header> </li>
  </div>

  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Atualização de categorias
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-md-6 col-lg-5 px-0">
          <form action="alterar_categoria_banco.php" method="POST" enctype="multipart/form-data">
            <div>
                <h4>ID</h4>
              <input type="number" name="id" placeholder="ID da categoria"/>
            </div>
            <div>
                <h4>Categoria</h4>
              <input type="text" name="categoria" placeholder="Novo nome da categoria"/>
            </div>
            
            <div class="d-flex ">
              <button type="submit">
                Salvar
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

  <script>
    // Função para exibir o nome do arquivo selecionado
    function mostrarProdutoSelecionado() {
        const fileInput = document.getElementById('produtoFile');
        const produtoSelecionado = document.getElementById('produtoSelecionado');
        
        if (fileInput.files.length > 0) {
            produtoSelecionado.textContent = 'Produto Selecionado: ' + fileInput.files[0].name;
        } else {
            produtoSelecionado.textContent = 'Nenhum produto selecionado';
        }
    }
  </script>

</body>

</html>



