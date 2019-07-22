<div id="library">

<!-- Nav-filtros -->

<div class="btn-toolbar d-flex justify-content-center" role="toolbar">
	<div class="btn-group mr-2" role="group">
		<div class="btn">Filtros: </div>
		<form id="filtro-generos" action="">
		  <select name="generos" class="custom-select">

		    <?php echo getOptionsGeneros(true); ?>

		  </select>
		</form>
		<form id="filtro-estado" action="">
		  <select name="estados" class="custom-select">

		    <?php echo getOptionsEstado(true); ?>

		  </select>
		</form>
		<button type="button" class="btn btn-secondary">Popularidad</button>
		<button type="button" class="btn btn-secondary">Última actualización</button>
	</div>
</div>

<!-- Lista libros en Librería -->



</div>