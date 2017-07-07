<?php

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
    define('BASEURL', DIRECTORY_SEPARATOR.'cursophp7'.DIRECTORY_SEPARATOR);

/** caminho no server para as classes do sistema **/
if ( !defined('CLASSURL') )
    define('CLASSURL', "class".DIRECTORY_SEPARATOR);

/** caminho no server para as interfaces sistema **/
if ( !defined('INTERFACEURL') )
    define('INTERFACEURL', BASEURL."interface".DIRECTORY_SEPARATOR);

/** caminho no server para as abstratas (classes) do sistema **/
if ( !defined('ABSTRACTURL') )
    define('ABSTRACTURL', BASEURL."abstract".DIRECTORY_SEPARATOR);


require_once("myautoload.php");


?>