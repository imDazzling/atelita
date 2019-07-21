<?php
    
    $nombre_modulo = "Generos";

    include ('funciones_generos.js.php');

    $contenido_editor_nuevo = "mostrarFormAlta();";

    $contenido_editor_modificacion = "mostrarFormModificar(id);";

    $form_edicion = PATH_VIEWS . "/admin/categorias_pub/partials/form_editor_generos.inc.php";

    $contenido = PATH_VIEWS . "/admin/categorias_pub/partials/listado_generos.inc.php";

    include ( PATH_VIEWS . '/admin/common/base_editor.inc.php');