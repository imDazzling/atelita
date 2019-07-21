<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bookflix?</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,300i,400,400i,500,500i&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= PATH_VENDOR ?>/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= PATH_VENDOR ?>/owlcarousel/owl.theme.default.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



	<link href="<?= PATH_CSS ?>/estilo.css" rel="stylesheet" type="text/css">

</head>
<body>

<!-- HEADER + NAVBAR -->
<header>
  <nav class="navbar navbar-header navbar-expand-md">
    <div class="container-fluid">
      <div class="navbar-brand"><a href="index.php"><img src="<?= PATH_IMG ?>/atelita_isomainwhite.png" alt="" id="logo"></a></div>
    </div>
  </nav>
</header>

<?php 

  if(isset($content)){
    include($content);
  }

?>

<!-- Footer -->
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

</body>
</html>