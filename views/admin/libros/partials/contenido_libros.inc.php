
<?php

include_once PATH_DAOS . '/librosDAO.php';

if ( isset($_REQUEST["a"]) ){

  switch ( $_REQUEST["a"] ){

    case "add":

      $libro["nombre"] = $_POST["nombre"];

      $libro["descripcion"] = $_POST["descripcion"];

      $libro["id_generos"] = $_POST["genero"];

      $libro["id_estado"] = $_POST["estado"];

      $libro["autores"] = $_POST['autor'];


      subirPortadaYGuardar($libro);

      break;

    case "new":

      include "form_edicion_libro.inc.php";
      
      break;

    case "list":

      include "listado_libros.inc.php"; 
      
      break;

    case "edit":

        include "form_edicion_libro.inc.php";

        break;

    case "del":

        $libro["id"] = $_REQUEST["id"];

        eliminarLibro( $libro );

        header( "Location: index.php?m=books&a=list&s=" . urlencode("Se ha eliminado el libro.") . "&t=success");

        break;

    case "update":
    
      $libro["id"] = $_POST["id"];

      $libro["nombre"] = $_POST["nombre"];

      $libro["descripcion"] = $_POST["descripcion"];

      $libro["id_generos"] = $_POST["genero"];

      $libro["id_estado"] = $_POST["estado"];

      $libro["autores"] = $_POST['autor'];

      //Guardo la portada del libro
      subirPortadaYGuardar($libro, true);


  }

}

function subirPortadaYGuardar($libro, $esModificacion=false){

      //Guardo la portada del libro
      if (isset($_FILES['portada']) && $_FILES['portada']['error'] === UPLOAD_ERR_OK) {
          

          $fileTmpPath = $_FILES['portada']['tmp_name'];
          $fileName = $_FILES['portada']['name'];

          $fileNameCmps = explode(".", $fileName);
          $fileExtension = strtolower(end($fileNameCmps));

          $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

          $allowedfileExtensions = array('jpg', 'gif', 'png', 'webp');

          if (in_array($fileExtension, $allowedfileExtensions)) {
                        
            $dest_path = UPLOAD_PORTADAS_PATH . "/" . $newFileName;
             
            if(move_uploaded_file($fileTmpPath, $dest_path))
            {
              $libro["portada"] = $newFileName;

              

              if ( $esModificacion ){
                  modificarLibro( $libro );
                  
                  $mensaje_ok = "Modificado correctamente.";

              }
              else{
                  agregarLibro( $libro );
                  
                  $mensaje_ok = "Pubicado correctamente.";  
              }
              
              header( "Location: index.php?m=books&a=list&s=" . urlencode($mensaje_ok) . "&t=success");
            }
            else
            {

              $mensaje_form = "ERROR AL SUBIR EL ARCHIVO";

              include "form_edicion_libro.inc.php"; 
            }
          }
          else{
              $mensaje_form = "El archivo de la portada no es valido.";

              include "form_edicion_libro.inc.php"; 
          }
        }
        else{
              if ( $esModificacion ){
                  modificarLibro( $libro );

                  header( "Location: index.php?m=books&a=list&s=" . urlencode("Modificado correctamente.") . "&t=success");
              }
        }

}



?>



</div>