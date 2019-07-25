<script>
	
	function enviarBusqueda(){
		var urlBusqueda = '&orden=' + $("#orden").val() +
						  '&genero=' + $("#generos").val() +
						  '&estado=' + $("#estado").val();



		window.setTimeout( window.location = urlBusqueda, 100 );
	}

</script>