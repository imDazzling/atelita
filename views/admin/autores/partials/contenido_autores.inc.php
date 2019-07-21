<?php
    
    $nombre_modulo = "Autores";

    include ('funciones_autores.js.php');

    $contenido_editor_nuevo = "mostrarFormAlta();";

    $contenido_editor_modificacion = "mostrarFormModificar(id);";

    $form_edicion = PATH_VIEWS . "/admin/autores/partials/form_editor_autores.inc.php";

    $contenido = PATH_VIEWS . "/admin/autores/partials/listado_autores.inc.php";

    include ( PATH_VIEWS . '/admin/common/base_editor.inc.php');