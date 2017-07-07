<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 05.07.2017
 * Time: 10:17
 */

spl_autoload_register(function ($myclass){
    $keyclass = substr($myclass, 0, 1);
    // Linha abaixo é opcional no windows, mas no linux/mac precisamos dela para substituir a barra pela correta.
    $myclass = str_replace('\\', DIRECTORY_SEPARATOR, $myclass);

    switch ($keyclass) {
        case 'c':
            if (file_exists(CLASSURL.$myclass.".php"))
                require_once (CLASSURL.$myclass.".php");
            break;
        case 'i':
            if (file_exists(INTERFACEURL.$myclass.".php"))
                require_once (INTERFACEURL.$myclass.".php");
            break;
        case 'a':
            if (file_exists(ABSTRACTURL.$myclass.".php"))
                require_once (ABSTRACTURL.$myclass.".php");
            break;
        default:
            if (file_exists(CLASSURL.$myclass.".php"))
                require_once (CLASSURL.$myclass.".php");
    }

});