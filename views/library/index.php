<?php 

	$daoGenero = PATH_DAOS . "/generosDAO.php";
	include($daoGenero);

	$daoLibros = PATH_DAOS . "/librosDAO.php";
	include($daoLibros);

	$daoLib = PATH_DAOS . "/libraryDAO.php";
	include($daoLib);

	$daoEst = PATH_DAOS . "/estadoDAO.php";
	include($daoEst);

	$helper = PATH_HELPERS . "/HTML_helpers.php";
	include($helper);


	if ( isset($_SESSION["id_usuarios"]) ){
		if(isset($_REQUEST["a"])){
			switch ( $_REQUEST["a"] ){
				
				case "add":
					agregarLibreria( $_GET["id"], $_SESSION["id_usuarios"]);
					
					$on_library = "";

					if ( isset($_GET["on_library"]))  {
						$on_library = "?on_library";
					}

					header("Location: index.php?m=lib" . $on_library);
					
					break;

				case "del":
					eliminarLibreria( $_GET["id"], $_SESSION["id_usuarios"]);

					$on_library = "";

					if ( isset($_GET["on_library" ])) {
						$on_library = "?on_library";
					}

					header("Location: index.php?m=lib" . $on_library);

					break;

			}
		}


	}
	else{
		

		header("Location: index.php?s=" . urlencode('Para acceder a la Librería debe iniciar sesión.'));
	}

	$content= PATH_VIEWS . "/library/partials/library.inc.php";
	$contenido_listado= PATH_VIEWS . "/library/partials/contenido_listado.inc.php";
	include( PATH_VIEWS . '/common/base.php' );

?>