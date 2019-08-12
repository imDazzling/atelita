<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Atelita: donde leer a tu tiempo</title>

  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
  <link rel="icon" type="image/png" sizes="196x196" href="/favicon-192.png">
  <link rel="icon" type="image/png" sizes="160x160" href="/favicon-160.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">
  <link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
  <link rel="apple-touch-icon" href="/favicon-57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/favicon-60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/favicon-180.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="/favicon-144.png">
  <meta name="msapplication-config" content="/browserconfig.xml">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,300i,400,400i,500,500i&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= PATH_VENDOR ?>/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= PATH_VENDOR ?>/owlcarousel/owl.theme.default.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



	<link href="<?= PATH_CSS ?>/estilo.css" rel="stylesheet" type="text/css">

</head>
<body>

<!-- HEADER + NAVBAR -->
<header>
  <nav class="navbar navbar-header navbar-expand-lg">
    <div class="container-fluid">
      <div class="navbar-brand"><a href="index.php"><img src="<?= PATH_IMG ?>/atelita_isomainwhite.png" alt="" id="logo"></a></div>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php?m=catalogo">Catálogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?m=lib&generos=-1&estados=-1">Mi librería</a>
          </li>
        </ul>
      

      <div id="search-box">
        <form id="search-nav" class="form-inline my-2 my-lg-0">
          <div class="searchbar">
            <input type="hidden" name="m" value="catalogo">
            <input class="search_input" type="text" id="buscar" name="buscar" placeholder="Buscar...">
            <a onclick="enviarBusqueda();" href="#" class="search_icon"><i class="fas fa-search"></i></a>
          </div>
        </form>
      </div>


      <div id="#navbarResponsive" class="navbar-login my-2 my-lg-0">
        <ul class="navbar-nav ml-md-auto">

          <?php 
                if ( !isset($_SESSION["usuario"]) ){ ?>
                  <li class="nav-item">
                     <a class="nav-link" href="index.php?m=login">INGRESA/REGISTRATE</a>
                  </li>
                <?php 
                }
                else{
                ?>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><?= $_SESSION["usuario"] ?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                       <a class="dropdown-item" href="index.php?m=logout">Salir</a>
                    </div>
                  </li>
                <?php 
                }
                ?>

        </ul>
      </div>
      </div>
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
</header>

<?php 

  if(isset($content)){
    include($content);
  }

?>

<!-- Footer -->

<div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-12">
      <h2>Conectate con Nosotros</h2>
    </div>
    <div class="col-12 social padding">
      <a href="#">
        <span style="font-size:3em;color:#335795">
          <i class="fab fa-facebook"></i>
        </span>
      </a>
      <a href="#">
        <span style="font-size:3em;color:#33CCFF">
          <i class="fab fa-twitter"></i>
        </span>
      </a>
      <a href="#">
        <span style="font-size:3em;color:#97163D">
          <i class="fab fa-instagram"></i>
        </span>
      </a>
    </div>
  </div>
</div>
<footer>
<nav class="navbar navbar-expand-md navbar-light bg-light text-center">
  <div class="container-fluid justify-content-center">
      <div class="navbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">dadad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">asdadasd</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">asfafafasf</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">afsafasfasfas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">afssafasf</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">afasfafasfas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">asfafsafasf</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">asfsafsafas</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="<?= PATH_VENDOR ?>/owlcarousel/owl.carousel.min.js"></script>

<!-- Scripts circunstanciales -->

<?php
  if(isset($contentjs)){
    include($contentjs);
  }
?>

<script type="text/javascript">
  
  function enviarBusqueda(){
    
  var urlBusqueda = 'index.php?m=catalogo&buscar=' + $("#buscar").val();

  window.setTimeout( window.location = urlBusqueda, 100 );  

  }

</script>

</body>
</html>