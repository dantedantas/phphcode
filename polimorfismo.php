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

abstract class Carro implements IVeiculo
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

class Voyage extends Carro
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
        echo "<br> POLI O veículo acelerou para ".$velocidade."Km/h <br>".parent::acelerar(50);
    }

    public function frenar($velocidade)
    {
        echo "<br> POLI O veículo frenou para ".$velocidade."Km/h <br>";
    }
}

//Devido a classe ser ABSTRACT ela nao pode ser instanciada. Deve-se criar uma outra classe que deve herdar a classe abstract.
//Fatal error: Uncaught Error: Cannot instantiate abstract class Carro in E:\xampp\htdocs\cursophp7\testeabstrata.php:52 Stack trace: #0 {main} thrown in E:\xampp\htdocs\cursophp7\testeabstrata.php on line 52
//$myCar = new Carro();

$myCar = new Voyage();
$myCar->parent->acelerar(5);
$myCar->acelerar(10);
$myCar->acelerar(20);
$myCar->passarMarcha(2);
$myCar->acelerar(30);
$myCar->passarMarcha(3);
$myCar->acelerar(40);

$myCar->frenar(30);
$myCar->frenar(20);
$myCar->frenar(10);