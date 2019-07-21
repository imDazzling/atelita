<?php
    
    $nombre_modulo = "Estados";

    include ('funciones_estados.js.php');

    $contenido_editor_nuevo = "mostrarFormAlta();";

    $contenido_editor_modificacion = "mostrarFormModificar(id);";

    $form_edicion = PATH_VIEWS . "/admin/estados/partials/form_editor_estados.inc.php";

    $contenido = PATH_VIEWS . "/admin/tipos_pub/partials/listado_estados.inc.php";

    include ( PATH_VIEWS . '/admin/common/base_editor.inc.php');