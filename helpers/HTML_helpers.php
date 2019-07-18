<?php 

  function getOptionsGeneros($incluir_todoslosgeneros = false, $id_item_seleccionado = null){
    
    $conexion = getConexion();

    $generos = buscarGenero();

    $opcionesGenero = "";

    if ($incluir_todoslosgeneros){
      $opcionesGenero .= '<option value="-1">Todos los géneros</option>';
    }

    foreach ( $generos as $genero ){
      $opcionesGenero .= '<option value="'. $genero["id"] . '"';

      if ( $id_item_seleccionado != null && ($id_item_seleccionado == $genero["id"]) ){
            $opcionesGenero .= 'selected="selected" ';
      }

      $opcionesGenero .= '>' . $genero["nombre"] . '</option>';
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
      $opcionesEstado .= '<option value="'. $estado["id"] . '"';

      if ( $id_item_seleccionado != null && ($id_item_seleccionado == $estado["id"]) ){
            $opcionesEstado .= 'selected="selected" ';
      }

      $opcionesEstado .= '>' . $estado["nombre"] . '</option>';
    }

    return $opcionesEstado;
  }