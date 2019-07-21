<?php 

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
      $opcionesGenero .= '<option value="-1">Todos los géneros</option>';
    }

    foreach ( $generos as $genero ){
      $opcionesGenero .= '<option value="'. $genero["id"] . '"';

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
      $opcionesEstado .= '<option value="-1">Todos los estados</option>';
    }

    foreach ( $estados as $estado ){
      $opcionesEstado .= '<option value="'. $estado["id_estado"] . '"';

      if ( $id_item_seleccionado != null && ($id_item_seleccionado == $estado["id_estado"]) ){
            $opcionesEstado .= 'selected="selected" ';
      }

      $opcionesEstado .= '>' . $estado["nombre_estado"] . '</option>';
    }

    return $opcionesEstado;
  }

  function getOptionsAutores($incluir_todoslosautores = false, $id_item_seleccionado = null){
    
    $conexion = getConexion();

    $autores = buscarAutor();

    $opcionesAutor = "";

    if ($incluir_todoslosautores){
      $opcionesAutor .= '<option value="-1">Todos los Autores</option>';
    }

    foreach ( $autores as $autor ){
      $opcionesAutor .= '<option class="autor-lista" value="'. $autor["id_autores"] . '"';

      if ( $id_item_seleccionado != null && ($id_item_seleccionado == $autor["id_autores"]) ){
            $opcionesAutor .= 'selected="selected" ';
      }

      $opcionesAutor .= '>' . $autor["nombre_autores"] . '</option>';
    }

    return $opcionesAutor;
  }