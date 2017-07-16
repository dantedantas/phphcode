<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 09.07.2017
 * Time: 13:34
 */

try {
     $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
}
catch (PDOException $err) {
    echo  "CODE: ".$err->getCode()."<br>";
    echo  "Message: ".$err->getMessage()."<br>";
}

$conn->beginTransaction();
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (:LOGIN, :SENHA)");


$mylogin = "bdantasAAA5";
$mysenha = "ssdgdsg";

$stmt->bindParam(":LOGIN", $mylogin);
$stmt->bindParam(":SENHA", $mysenha);

try {
    if ($stmt->execute())
    {
        $conn->commit();
        echo "Executado com sucesso! (commit)";
    } else
    {
        $conn->rollBack();
        echo "<br><br><br>FALHA AO INSERIR DADOS! (rollBack)";
    }

}
catch (PDOException $err) {
    echo  "CODE: ".$err->getCode()."<br>";
    echo  "Message: ".$err->getMessage()."<br>";

    echo "<br><br><br>FALHA AO INSERIR DADOS!";
}