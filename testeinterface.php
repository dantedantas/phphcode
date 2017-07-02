<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 23.06.2017
 * Time: 12:26
 */
interface IVeiculo
{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function passarMarcha($marcha);

}

class Carro implements IVeiculo
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

$myCar = new Carro();
$myCar->acelerar(10);
$myCar->acelerar(20);
$myCar->passarMarcha(2);
$myCar->acelerar(30);
$myCar->passarMarcha(3);
$myCar->acelerar(40);

$myCar->frenar(30);
$myCar->frenar(20);
$myCar->frenar(10);