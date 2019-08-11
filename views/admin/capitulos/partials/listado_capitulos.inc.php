<div class="m-5 row ">					

	<div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             
              <li class="nav-item">
                    <button id="btnNuevo" type="button" class="btn btn-primary">
                      <a href="index.php?m=caps&a=new">Nuevo</a>
                    </button>
              </li>
            </ul>
	<br>
    </div>

<?php
	
	include_once PATH_HELPERS . '/html_helpers.php';

    include_once PATH_DAOS . '/capitulosDAO.php';

    $capitulo = buscarTodosLosCapitulos();

    $campos = [ "id_capitulos" => "ID", "descripcion_capitulos" => "Identificador del Capítulo" ];

	echo getTablaHTMLCaps($capitulo, $campos, "id_capitulos", "capitulos");