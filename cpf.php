<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 23.06.2017
 * Time: 10:08
 */
class Documento
{
    private $numero;

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

}

class Cpf extends Documento
{
    /**
     * @return bool
     */
    public function validaCPF():bool
    {
        $myCPF = $this->getNumero();
        return true;
    }

    public function exibirCPF():string
    {
        $myCPF = $this->getNumero();
        return "Meu CPF: ".$myCPF;
    }
}

$Obj = new Cpf();

function imprimePre($str)
{
    echo "<pre>".$str."</pre>"; // O "PRE" formata o texto bonitinho.
}

$Obj->setNumero("111222333-44");


imprimePre($Obj->validaCPF());
var_dump($Obj->validaCPF());
imprimePre($Obj->getNumero());
imprimePre($Obj->exibirCPF());
