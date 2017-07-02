<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 23.06.2017
 * Time: 10:08
 */
class Pessoa
{
    // Todos veem a variável publica
    public $nome;
    // A protected só pode ser chamada internamente pela classe, ex: método get, ou por que herdar esta classe
    protected $idade;
    // É a de maior seguranca. Só pode ser vista pela própria classe. Nem quem herda consegue ver. Usar método interno, ex abaixo, ou o get.
    private $senha;

    //por estar internamente na classe, ele vai imprimir tudo
    public function __construct()
    {
        $this->nome  = "Rasmus Lerdorf";
        $this->idade =        48;
        $this->senha =  "321654987";
    }

    public function exporDados():string
    {
        return $this->nome."<br>".$this->idade."<br>".$this->senha."<br>";
    }
}

$Obj = new Pessoa();

function imprimePre($str)
{
    echo "<pre>".$str."</pre>"; // O "PRE" formata o texto bonitinho.
}

imprimePre($Obj->nome);

//Fatal error: Uncaught Error: Cannot access protected property Pessoa::$idade in E:\xampp\htdocs\cursophp7\Pessoa.php:38 Stack trace: #0 {main} thrown in E:\xampp\htdocs\cursophp7\Pessoa.php on line 42
//imprimePre($Obj->idade);

//Fatal error: Uncaught Error: Cannot access private property Pessoa::$senha in E:\xampp\htdocs\cursophp7\Pessoa.php:40 Stack trace: #0 {main} thrown in E:\xampp\htdocs\cursophp7\Pessoa.php on line 45
//imprimePre($Obj->senha);

imprimePre($Obj->exporDados());