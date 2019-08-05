<div id="catalogo">

<!-- Nav-filtros -->

<div class="btn-toolbar btn-group d-flex justify-content-center" role="toolbar">
	
	<form id="filtro-generos" role="group" action="" class="btn-group mr-2">
	
		<div class="btn">Filtros: </div>

			<input type="hidden" name="m" value="catalogo">

		  <select id="generos" name="generos" class="custom-select btn btn-secondary" for="busqueda">

		    <?php echo getOptionsGeneros(true); ?>

		  </select>

		  <select id="estado" name="estados" class="custom-select btn btn-secondary" for="busqueda">

		    <?php echo getOptionsEstado(true); ?>

		  </select>

		<!--<button onclick="enviarBusqueda();" type="button" class="btn btn-secondary" for="orden">Popularidad</button>

		<button type="button" class="btn btn-secondary" for="orden">Última actualización</button>-->

		<input class="btn btn-secondary" type="submit" value="Filtrar">

	</form>
</div>

	<div class="m-5 row">
				<?php

					include ($contenido_listado);

			    ?>
	</div>

</div>