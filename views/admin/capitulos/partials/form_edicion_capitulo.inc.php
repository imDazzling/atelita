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

            <input type="hidden" name="m" value="caps">

          
            <?php
              $action = "new";

              if ( isset($_REQUEST["a"]) && $_REQUEST["a"] == 'new' ){
                $action = "add";
              }
            
              if ( isset($_REQUEST["a"]) && $_REQUEST["a"] == 'edit' ) {
                //Obtengo info del capitulo

                $registros = buscarCapitulo($_REQUEST["id"]);

                $capitulo = mysqli_fetch_assoc($registros);

                $action = "update";

                echo '<input type="hidden" name="id" value="' . $_REQUEST["id"] . '">';

              
              }
            ?>

            <input type="hidden" name="a" value="<?= $action?>">

            <label for="libro">Libro</label> 
            <div>
              <select id="libro" name="libro" aria-describedby="libroHelpBlock" required="required" class="custom-select">

                <?php

                  include_once PATH_DAOS . '/librosDAO.php';
                  echo getOptionsLibros(false, $capitulo["id_libro"]);
                ?>

              </select> 
              <span id="categoriaHelpBlock" class="form-text text-muted">¿A qué libro pertenece el siguiente capítulo?</span>
            </div>
          </div>
          <div class="form-group">
            <label for="numero">Número del capítulo</label> 

            <input id="numero" name="numero" type="text" aria-describedby="numeroHelpBlock" required="required" class="form-control" value="<?=isset($capitulo["numero_capitulos"])?$capitulo["numero_capitulos"]:'';?>"> 

            <span id="tituloHelpBlock" class="form-text text-muted">Número del capitulo dentro del Libro al que pertenece.</span>
          </div>
          
          <div class="form-group">
            <label for="nombre">Nombre del capítulo</label> 
            
            <textarea id="nombre" name="nombre" cols="40" rows="4" aria-describedby="nombreHelpBlock" required="required" class="form-control"><?= isset($capitulo["nombre_capitulos"])? $capitulo["nombre_capitulos"] : ''; ?></textarea> 

            <span id="descripcionHelpBlock" class="form-text text-muted">Nombre del capítulo.</span>
          </div>

          <div class="form-group">
            <label for="descripcion">Descripción del capítulo</label> 
            
            <textarea id="descripcion" name="descripcion" cols="40" rows="4" aria-describedby="descripcionHelpBlock" required="required" class="form-control"><?= isset($capitulo["descripcion_capitulos"])? $capitulo["descripcion_capitulos"] : ''; ?></textarea> 

            <span id="descripcionHelpBlock" class="form-text text-muted">Identificador del capítulo, con siglas del libro y número del capítulo.</span>
          </div>

          <!-- ckeditor -->
      		<div class="form-group">
      			<label for="contenido">Contenido del Capítulo</label>
      			
            <textarea id="editor" name="contenido" class="ckeditor form-control"><?= isset($capitulo["contenido_capitulos"])? $capitulo["contenido_capitulos"] : ''; ?></textarea>

      			
      		</div>

          <div class="form-group text-center pt-4">
            <button name="submit" type="submit" class="btn btn-primary">Publicar</button>
          </div>

        </form>

    </div>
  </div>

</script>


