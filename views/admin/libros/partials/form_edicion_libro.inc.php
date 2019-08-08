<div class="row justify-content-center">
    <div class="col-md-4">

        <?php if ( isset($mensaje_form) ){?>

          <div class="alert alert-danger alert-dismissible fade show text-center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= $mensaje_form ?>
          </div>
          
        <?php } ?>

        <form action="index.php" method="POST" enctype="multipart/form-data" class="px-4">
          <div class="form-group">

            <input type="hidden" name="m" value="books">

          
            <?php
              $action = "new";

              if ( isset($_REQUEST["a"]) && $_REQUEST["a"] == 'new' ){
                $action = "add";
              }
            
              if ( isset($_REQUEST["a"]) && $_REQUEST["a"] == 'edit' ) {
                //Obtengo info del libro

                $registros = buscarLibro($_REQUEST["id"]);

                $libro = mysqli_fetch_assoc($registros);

                $action = "update";

                echo '<input type="hidden" name="id" value="' . $_REQUEST["id"] . '">';

              
              }
            ?>

            <input type="hidden" name="a" value="<?= $action?>">

            <label for="genero">Género</label> 
            <div>
              <select id="genero" name="genero" aria-describedby="categoriaHelpBlock" required="required" class="custom-select">

                <?php

                  include_once PATH_DAOS . '/generosDAO.php';
                  echo getOptionsGeneros(false, $libro["id_generos"]);
                ?>

              </select> 
              <span id="categoriaHelpBlock" class="form-text text-muted">¿A qué género principal pertenece el siguiente libro?</span>
            </div>
          </div>
          <div class="form-group">
            <label for="nombre">Nombre del libro</label> 

            <input id="nombre" name="nombre" type="text" aria-describedby="tituloHelpBlock" required="required" class="form-control" value="<?=isset($libro["nombre_libros"])?$libro["nombre_libros"]:'';?>"> 

            <span id="tituloHelpBlock" class="form-text text-muted">Nombre del libro</span>
          </div>
          
          <div class="form-group">
            <label for="descripcion">Descripción</label> 
            
            <textarea id="descripcion" name="descripcion" cols="40" rows="4" aria-describedby="descripcionHelpBlock" required="required" class="form-control"><?= isset($libro["descripcion_libros"])? $libro["descripcion_libros"] : ''; ?></textarea> 

            <span id="descripcionHelpBlock" class="form-text text-muted">Sinopsis del libro o descripción pertinente.</span>
          </div>


          <div class="form-group">
            <label for="titulo">Autor</label> 

              <select multiple id="autor" name="autor[]" aria-describedby="categoriaHelpBlock" required="required" class="custom-select">
                <?php

                  include_once PATH_DAOS . '/autoresDAO.php';

                  $autoresDelLibro = [];

                  if ( isset($_REQUEST["a"]) && $_REQUEST["a"] == 'edit'){
                    $autores = getAutoresDelLibro($_REQUEST["id"]);

                    
                    foreach ($autores as $autor) {
                      $autoresDelLibro[] = $autor['id_autores'];
                    }
                  }

                  echo getOptionsAutores(false, $autoresDelLibro);

   
                ?>

              </select>
            
          </div>


          <div class="form-group">
            <label for="estado">Estado del libro</label> 
            <div>
              <select id="estado" name="estado" aria-describedby="tipo_publicacionHelpBlock" required="required" class="custom-select">

                <?php
                  include_once PATH_DAOS . '/estadoDAO.php';
                  echo getOptionsEstado(false, $libro["id_estado"]);
                ?>

              </select> 


              <span id="tipo_publicacionHelpBlock" class="form-text text-muted">Selecciona el estado actual del libro</span>
            </div>
          </div>
          <div class="form-group">
            <label for="portada">Portada</label> 

            <img class="card-img-top mb-2"  alt=""  src="<?= PATH_FILES . '/imagenes/portadas/' . $libro["portada_libros"] ?>">

            <input id="portada" name="portada" type="file" class="form-control-file" 

            <?php if($action == 'add') { ?>
              required="required" class="form-control">
            <?php } ?>
          </div> 

          
          
          <div class="form-group text-center pt-4">
            <button name="submit" type="submit" class="btn btn-primary">Publicar</button>
          </div>

        </form>

    </div>
