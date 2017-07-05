<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 05.07.2017
 * Time: 09:50
 */
abstract class aAuto implements iTransport
{

    public function acelerar($velocidade)
    {
        echo "<br> O veículo acelerou para ".$velocidade."Km/h <br>";
    }

    public function frenar($velocidade)
    {
        echo "<br> O veículo frenou para ".$velocidade."Km/h <br>";
    }

    public function passarMarcha($marcha)
    {
        echo "<br> O veículo passou a marcha para ".$marcha."<br>";
    }
}