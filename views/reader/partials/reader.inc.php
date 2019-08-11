<!-- Consola/head -->
<div id="lectura">

<div id="console" class="btn-toolbar d-flex justify-content-center" role="toolbar">
  <div class="btn-group mr-2" role="group">
    <button type="button" class="btn btn-secondary" id="down">Aa-</button>
    <button type="button" class="btn btn-secondary" id="up">Aa+</button>
  </div>
  <div class="btn-group mr-2" role="group">
    <button type="button" class="btn btn-secondary" id="bgwhite"></button>
    <button type="button" class="btn btn-secondary" id="bggrey"></button>
    <button type="button" class="btn btn-secondary" id="bgblack"></button>
  </div>
</div>

<!-- Indice - Lista de capitulos -->

<?php 

if(isset($_REQUEST["id"])){

  include_once PATH_DAOS . '/capitulosDAO.php';
  include_once PATH_HELPERS . '/HTML_helpers.php';
  $libro = $_REQUEST["id"];

?>


<div class="btn-toolbar btn-group d-flex justify-content-center" role="toolbar">
  
  <form id="filtro-capitulos" role="group" action="" class="btn-group mr-2">
  
    <div class="btn">Capítulos: </div>

      <input type="hidden" name="m" value="read">

      <input type="hidden" name="id" value="<?php echo $libro; ?>">

    <select id="c" name="c" class="custom-select btn btn-secondary" for="busqueda">

      <?php echo getOptionsCapitulos(false, $libro); ?>

    </select>

    <input class="btn btn-secondary" type="submit" value="Ir al capítulo">

  </form>

</div>

  


<?php 

}
else{
  echo("No hay ningún libro seleccionado.");
}

?>

<!-- Lectura -->

<?php 



if ( isset($_REQUEST["c"]) ){

  $capitulo = $_REQUEST["c"];

  switch ( $_REQUEST["c"] ){

    case $capitulo:

      include "contenido_capitulo.inc.php";
      
      break;
 }
}
else{
  echo("Selecciona un capítulo para leer.");
} ?>

<!-- Consola/foot -->

<div id="console">
  
</div>


</div>