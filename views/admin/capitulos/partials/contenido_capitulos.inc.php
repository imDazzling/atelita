
<?php

include_once PATH_DAOS . '/librosDAO.php';

include_once PATH_DAOS . '/capitulosDAO.php';

if ( isset($_REQUEST["a"]) ){

  switch ( $_REQUEST["a"] ){

    case "add":

      $capitulo["id_libro"] = $_POST["libro"];

      $capitulo["numero"] = $_POST["numero"];

      $capitulo["nombre"] = $_POST["nombre"];

      $capitulo["descripcion"] = $_POST["descripcion"];

      $capitulo["contenido"] = $_POST["contenido"];

      agregarCapitulo($capitulo);

      header( "Location: index.php?m=caps&a=list&s=" . urlencode("Capítulo publicado exitosamente.") . "&t=success");

      break;

    case "new":

      include "form_edicion_capitulo.inc.php";  

      break;

    case "list":

      include "listado_capitulos.inc.php"; 
      
      break;

    case "edit":

        include "form_edicion_capitulo.inc.php";

        break;

    case "del":

        $capitulo["id"] = $_REQUEST["id"];

        eliminarCapitulo( $capitulo );

        header( "Location: index.php?m=caps&a=list&s=" . urlencode("Se ha eliminado el capítulo.") . "&t=success");

        break;

    case "update":
    
      $capitulo["id"] = $_POST["id"];

      $capitulo["id_libro"] = $_POST["libro"];

      $capitulo["numero"] = $_POST["numero"];

      $capitulo["nombre"] = $_POST["nombre"];

      $capitulo["descripcion"] = $_POST["descripcion"];

      $capitulo["contenido"] = $_POST["contenido"];

      modificarCapitulo($capitulo);

      header("Location: index.php?m=caps&a=list&s=" . urlencode("Se ha actualizado el capítulo.") . "&t=success");

  }

}



?>



</div>