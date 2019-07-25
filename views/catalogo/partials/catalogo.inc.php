<div id="catalogo">

<!-- Nav-filtros -->

<div class="btn-toolbar d-flex justify-content-center" role="toolbar">
	<div class="btn-group mr-2" role="group">
		<div class="btn">Filtros: </div>
		<form id="filtro-generos" action="">
		  <select id="generos" name="generos" class="custom-select" for="busqueda">

		    <?php echo getOptionsGeneros(true); ?>

		  </select>
		</form>
		<form id="filtro-estado" action="">
		  <select id="estado" name="estados" class="custom-select" for="busqueda">

		    <?php echo getOptionsEstado(true); ?>

		  </select>
		</form>
		<button onclick="enviarBusqueda();" type="button" class="btn btn-secondary" for="orden">Popularidad</button>
		<button type="button" class="btn btn-secondary" for="orden">Última actualización</button>
	</div>
</div>

<div class="m-5 row">				
				<?php

					include ($contenido_listado);

			    ?>
			</div>

</div>