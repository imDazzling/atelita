

<div class="m-5 row ">					

	<div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             
              <li class="nav-item">
                    <button id="btnNuevo" type="button" class="btn btn-primary">
                      <a href="index.php?m=books&a=new">Nuevo</a>
                    </button>
              </li>
            </ul>

    </div>

<?php

    $libros = buscarLibros("", -1, -1); //trae todos

	if ($libros){
		foreach ($libros as $libro) {
		crearHTMLCardLibro($libro['nombre_libros'], $libro['portada_libros'], $libro['descripcion_libros'], $libro['id_generos'], $libro['id_libros'], $libro['id_estado'], '...' ,  false, $_SESSION["permiso_usuario"] == 1 );
		}
    }	

?>
</div>