<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/cadeado.png" type="image/x-icon">

  <title>
    Área administrativa
  </title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

</head>
<style>
            body {
                height: 100vh;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            } 
</style>

<body>
  <div class="">

    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Faça login para continuar
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>
      </nav>
    </header>

<section class="slider_section">
    <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <form method="post" action="validar_login.php">
                        <div>
                            <span>Login</span>
                            <input type="text" name="login"/>
                        </div>
                        <div>
                            <span>Senha</span>
                            <input type="password" name="senha"/>
                            <div>
                                <input type="submit" value="Entrar" class="btn btn-dark">
                                <a href="index.html">
                                    <button type="button" class="btn btn-dark">Voltar</button>
                                </a>
                            </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
</section>

</div>


</body>



