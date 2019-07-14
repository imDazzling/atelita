<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bookflix?</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,300i,400,400i,500,500i&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= PATH_VENDOR ?>/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= PATH_VENDOR ?>/owlcarousel/owl.theme.default.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="<?= PATH_VENDOR ?>/owlcarousel/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="<?= PATH_CSS ?>/estilo.css">
</head>
<body>

<!-- HEADER + NAVBAR -->
<header>
  <nav class="navbar navbar-header navbar-expand-md navbar-dark">
    <div class="container-fluid">
      <div class="navbar-brand"><a href="index.php"><img src="<?= PATH_IMG ?>/atelita_isomainwhite.png" alt="" id="logo"></a></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="#navbarResponsive">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php?m=catalogo">Catálogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?m=lib">Mi librería</a>
          </li>
        </ul>
      </div>
      <div id="search-box">
        <form id="search-nav" class="form-inline">
          <div class="searchbar">
            <input class="search_input" type="text" name="" placeholder="Buscar...">
            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
          </div>
        </form>
      </div>
      <div id="#navbarResponsive" class="navbar-login">
        <ul class="navbar-nav mr-auto">

          <?php 
                if ( !isset($_SESSION["usuario"]) ){ ?>
                  <li class="nav-item">
                     <a class="nav-link" href="index.php?m=login">LOGIN</a>
                  </li>
                <?php 
                }
                else{
                ?>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"><?= $_SESSION["usuario"] ?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                       <a class="dropdown-item" href="#">Cuenta</a>
                       
                       <a class="dropdown-item" href="index.php?m=logout">Salir</a>
                    </div>
                  </li>
                <?php 
                }
                ?>

        </ul>
      </div>
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

<!-- Scripts circunstanciales -->

<?php
  if(isset($contentjs)){
    include($contentjs);
  }
?>

</body>
</html>