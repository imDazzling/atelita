<?php

function crearHTMLCardLibro($nombre, $portada, $descripcion, $id_generos, $id_libros, $id_estado, $largo, $on_library = false, $es_admin ){

?>  

  

  <div class="col-md-3 mb-4 text-center d-flex align-items-stretch">


  <div class="card">

        <?php


                if ( $on_library ){
                    $link = '<a class="nav-link p-0 m-2 text-right" href="index.php?m=lib';

                    if ( isset($_GET["on_library"]) ){
                       $link .= "&on_library";
                    }

                    
                    $link .= "&a=del&id=" . $id_libros .'">' . '<img src="' . PATH_IMG . '/favorito.png' . '"></a>';

                    echo $link;
                }
                else{
                    echo '<a class="nav-link p-0 m-2 text-right" href="index.php?m=lib&a=add&id=' . $id_libros .'">' . '<img src="' . PATH_IMG . '/no_favorito.png' . '"></a>';
                }
                
                echo '<a class="nav-link" href="index.php?m=book&id=' . $id_libros .'">';

        ?>

    <div class="card-title mb-5 p-4">
          
      <?= $nombre ?>
      </div>

      <img class="card-img-top"  alt=""  src="<?= PATH_FILES . '/imagenes/portadas/' . $portada ?>">
     
        <?php
            
                echo '</a>';
           
        ?>

      <div class="card-img-top card-body">

    </div>
        



        <div class="card-footer">
          <?php 


                $conexion = getConexion();

                $consulta = "SELECT autores.nombre_autores

                              FROM libros, autores, libros_autores

                              WHERE libros.id_libros = libros_autores.id_libro AND 
                              autores.id_autores = libros_autores.id_autor AND 

                              libros.id_libros = $id_libros";


                $autores = $conexion->query($consulta);

                while ( $autor = $autores->fetch_assoc() ){

                  echo "<p>" . $autor["nombre_autores"] . "</p>";
                } 
                


              if ( $es_admin) {
              ?>
              <div class="row py-2 mt-2 bg-light">
            
                <div class="col-12 ">
                    <a role="button" class="btn px-4 btn-success" href="index.php?m=books&a=edit&id=<?=$id_libros?>" >Editar</a>
                    <a role="button" class="btn px-4 btn-danger" href="index.php?m=books&a=del&id=<?=$id_libros?>" >Eliminar</a>
                </div>

              </div>              
        
         <?php } ?>

        </div>



  </div>



  </div>


<?php 

}

  function getTablaHTML( $registros, $campos, $primary_key, $nombre_modulo ){

    $tablaHTML = "<table class=\"table table-hover\">";

        $tablaHTML .= "<thead><tr>";

        foreach ($campos as $campo => $label){
          $tablaHTML .= "<th>$label</th>";
        }

        $tablaHTML .= "<th>Acciones</th></tr></thead>";

    while ( $registro = $registros->fetch_assoc() ){

      $tablaHTML .= '<tr id="' . $registro[$primary_key] . '">';

      foreach ($campos as $campo => $label){

        $tablaHTML .= '<td>' . $registro[ "$campo" ] . "</td>";

      }
      
      $tablaHTML .= "<td>";

      $tablaHTML .= "<button onclick=\"mostrarEditor('modificar', " . $registro[$primary_key]  . ");\" class=\"btn btn-success btn-sm\">Editar</button>";

      $tablaHTML .= "<a role=\"button\" class=\"btn btn-danger btn-sm ml-1  \" href='index.php?m=" . $nombre_modulo . "&a=del&id=" . $registro[$primary_key] . "'>Eliminar</a>";
    }

    $tablaHTML .= "</table>";

    return $tablaHTML;

  }

  function getOptionsGeneros($incluir_todoslosgeneros = false, $id_item_seleccionado = null){
    
    $conexion = getConexion();

    $generos = buscarGenero();

    $opcionesGenero = "";

    if ($incluir_todoslosgeneros){
      $opcionesGenero .= '<option onclick="enviarBusqueda();" value="-1">Todos los géneros</option>';
    }

    foreach ( $generos as $genero ){
      $opcionesGenero .= '<option onclick="enviarBusqueda();" value="'. $genero["id_generos"] . '"';

      if ( $id_item_seleccionado != null && ($id_item_seleccionado == $genero["id_generos"]) ){
            $opcionesGenero .= 'selected="selected" ';
      }

      $opcionesGenero .= '>' . $genero["nombre_generos"] . '</option>';
    }

    return $opcionesGenero;
  }

  function getOptionsEstado($incluir_todoslosestados = false, $id_item_seleccionado = null){
    
    $conexion = getConexion();

    $estados = buscarEstado();

    $opcionesEstado = "";

    if ($incluir_todoslosestados){
      $opcionesEstado .= '<option onclick="enviarBusqueda();" value="-1">Todos los estados</option>';
    }

    foreach ( $estados as $estado ){
      $opcionesEstado .= '<option onclick="enviarBusqueda();" value="'. $estado["id_estado"] . '"';

      if ( $id_item_seleccionado != null && ($id_item_seleccionado == $estado["id_estado"]) ){
            $opcionesEstado .= 'selected="selected" ';
      }

      $opcionesEstado .= '>' . $estado["nombre_estado"] . '</option>';
    }

    return $opcionesEstado;
  }

  function getOptionsAutores($incluir_todoslosautores = false, $id_items_seleccionados = null){
    
    $conexion = getConexion();

    $autores = buscarAutor();

    $opcionesAutor = "";

    if ($incluir_todoslosautores){
      $opcionesAutor .= '<option value="-1">Todos los Autores</option>';
    }

    foreach ( $autores as $autor ){
      $opcionesAutor .= '<option class="autor-lista" value="'. $autor["id_autores"] . '"';

      if ( $id_items_seleccionados != null && (in_array($autor["id_autores"], $id_items_seleccionados) ) ){
            $opcionesAutor .= 'selected="selected" ';
      }

      $opcionesAutor .= '>' . $autor["nombre_autores"] . '</option>';
    }

    return $opcionesAutor;
  }