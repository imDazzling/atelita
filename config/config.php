<?php

    define('SITE_FOLDER', 'atelita');

    define('ROOT_URL', strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http'."://".$_SERVER['HTTP_HOST'] . "/" . SITE_FOLDER);

    define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . "/" . SITE_FOLDER) ;

    define("PATH_VIEWS", SITE_ROOT . "/views");

    define("PATH_HELPERS", SITE_ROOT . "/helpers");

    define("PATH_DAOS", SITE_ROOT . "/modelo/DAOs");

    define("PATH_CSS", ROOT_URL . "/css");
    
    define("UPLOAD_PORTADA_PATH", SITE_ROOT . "/files/imagenes/portadas");

    define("UPLOAD_CHAPTER", SITE_ROOT . "/files/capitulos");
    
    define("PATH_RECURSOS", ROOT_URL . "/recursos");

    define("PATH_IMG", ROOT_URL . "/recursos/img");

    define("PATH_VENDOR", ROOT_URL . "/vendor");
