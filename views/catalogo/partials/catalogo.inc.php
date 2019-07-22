<div id="catalogo">

<!-- Nav-filtros -->

<div class="btn-toolbar d-flex justify-content-center" role="toolbar">
	<div class="btn-group mr-2" role="group">
		<div class="btn">Filtros: </div>
		<form id="filtro-generos" action="">
		  <select name="generos" class="custom-select" for="busqueda">

		    <?php echo getOptionsGeneros(true); ?>

		  </select>
		</form>
		<form id="filtro-estado" action="">
		  <select name="estados" class="custom-select" for="busqueda">

		    <?php echo getOptionsEstado(true); ?>

		  </select>
		</form>
		<button onclick="ordenarPopularidad()" type="button" class="btn btn-secondary" for="orden">Popularidad</button>
		<button type="button" class="btn btn-secondary" for="orden">Última actualización</button>
	</div>
</div>

<!-- Lista libros -->

</div>