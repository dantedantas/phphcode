<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 05.07.2017
 * Time: 09:51
 */
class cVoyage extends aAuto
{
    public function __construct()
    {
        //nao faz nada
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "<br>DESTRUIU!!!<br>";
    }

    public function acelerar($velocidade)
    {
        echo "<br> POLIMORFISM O veículo acelerou para ".$velocidade."Km/h <br>".parent::acelerar(50);
    }
}