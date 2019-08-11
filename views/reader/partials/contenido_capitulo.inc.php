<?php

$registros = buscarCapitulo( $_REQUEST["c"] );

$capitulo = mysqli_fetch_assoc($registros);

echo '<div id="capitulo">' . $capitulo["contenido_capitulos"] . "</div>";

?>