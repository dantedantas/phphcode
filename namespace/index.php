<?php

require_once("cnf".DIRECTORY_SEPARATOR."config.php");

use Cliente\cCadastro;

$cad = new cCadastro();
$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

echo "<pre>".$cad."</pre>";

echo "<br><br>";

$cad->registrarVenda();

?>