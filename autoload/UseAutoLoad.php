<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 05.07.2017
 * Time: 09:53
 */


/**
 *  Autoload comentada, estamos usando a spl_autoload
 */
/*
function __autoload($myclass)
{
            if (file_exists($myclass.".php") === true)
                require_once ($myclass.".php");
}
 */

/**
 *  spl_autoload comentada, estamos usando a spl_autoload por meio de um include
 */
/*
function incluirClasse($myclass)
{
    if (file_exists($myclass.".php") === true)
        require_once ($myclass.".php");
}

spl_autoload_register("incluirClasse");
*/

require_once ("util".DIRECTORY_SEPARATOR."myautoload.php");
echo "<br><br>";
var_dump(spl_autoload_functions());
echo "<br><br>";
$myCar = new cVoyage();
echo "<br><br>";
var_dump(spl_autoload_functions());
echo "<br><br>";
$myCar->acelerar(10);
$myCar->acelerar(20);
$myCar->passarMarcha(2);
$myCar->acelerar(30);
$myCar->passarMarcha(3);
$myCar->acelerar(40);

$myCar->frenar(30);
$myCar->frenar(20);
$myCar->frenar(10);

echo "<br><br>";
var_dump(spl_autoload_functions());
echo "<br><br>";
?>