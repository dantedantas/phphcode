<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 13.06.2017
 * Time: 22:06
 */
$foo = 'uma pessoa';

//concatenação
$bar = "Eu sou " . $foo . "!"; // => 1
$bar = 'Eu sou ' . $foo . '!'; // => 2
//interpolação
$bar = "Eu sou $foo!"; // => 3
$bar = "Eu sou {$foo}!"; // => 4

$ql = "<br><br>";

$nome = "dante dantas";
$nome = strtoupper($nome);
echo "strtoupper ".$nome;
echo $ql;
$nome = strtolower($nome);
echo "strtolower ".$nome;
echo $ql;
echo "ucwords ".ucwords($nome);
echo $ql;

echo "ucfirst ".ucfirst($nome);
echo $ql;

echo "str_replace ".str_replace("a", "1", $nome);

echo $ql;

$frase = "A repeticao é a mae da retencao";
$palavra = "mae";

$q = strpos($frase, $palavra);

var_dump($q);

echo $ql;

$texto = substr($frase, 0, $q);

var_dump($texto);
echo $ql;

$texto = substr($frase, $q+strlen($palavra), strlen($frase));

var_dump($texto);
echo $ql;



/*
function timeFunc($function, $runs)
{
    $times = array();

    for ($i = 0; $i < $runs; $i++)
    {
        $time = microtime();
        call_user_func($function);
        $times[$i] = microtime() - $time;
    }

    return array_sum($times) / $runs;
}

function Method1()
{
    $foo = 'uma pessoa';
    for ($i = 0; $i < 10000; $i++)
        $t = "Eu sou " . $foo . "!"; //1
}

function Method2()
{
    $foo = 'uma pessoa';
    for ($i = 0; $i < 10000; $i++)
        $t = 'Eu sou ' . $foo . '!'; //2
}

function Method3()
{
    $foo = 'uma pessoa';
    for ($i = 0; $i < 10000; $i++)
        $t = "Eu sou $foo!"; //3
}
function Method4()
{
    $foo = 'uma pessoa';
    for ($i = 0; $i < 10000; $i++)
        $t = "Eu sou {$foo}!"; //4
}

echo timeFunc('Method1', 10) . "n"; // => 0.0020885
echo timeFunc('Method2', 10) . "n"; // => 0.0021168
echo timeFunc('Method3', 10) . "n"; // => 0.0021132
echo timeFunc('Method4', 10) . "n"; // => 0.0023884

*/


/*
 * Vamos analisar os quatro exemplos acima sendo que os primeiros dois é utilizada concatenação e nos últimos dois interpolação.

Métodos 1 e 2

Vamos começar por analisar o primeiro. Neste caso, o segundo método devia ser utilizado ao invés do primeiro. Porquê?

As aspas duplas dizem ao PHP para iniciar a interpolação gastando mais recursos e podendo demorar mais tempo. Devemos utilizar a aspa única quando não utilizamos nenhum benefício da interpolação como n, por exemplo.

Métodos 3 e 4

Em relação ao terceiro e quarto, é indiferente porém o uso de chavetas é extremamente recomendado quando se inserem variáveis mais complexas como arrays.

Caso sejam variáveis simples, o uso de chavetas é desnecessário não trazendo benefícios nem malefícios.

Qual devo usar?

Depende! Geralmente, a interpolação é mais lenta porém, a concatenação pode tornar-se mais lenta caso sejam utilizadas muitas variáveis.

Executei seguinte teste para confirmar as velocidades que cada um demora a correr (função timeFunc obtida aqui):
 *
 *
 */