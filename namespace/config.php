<?php

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
    define('BASEURL', DIRECTORY_SEPARATOR.'cursophp7'.DIRECTORY_SEPARATOR);


spl_autoload_register(function($nameClass){
    $dirClass = "class";
    $fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass .".php";
    if ( file_exists($fileName) ) {
        require_once($fileName);
    }
});

?>