<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 08.07.2017
 * Time: 19:20
 */


$conn = new PDO("sqlsrv:database=dbphp7;server=localhost\ROGUEONE\SQLEXPRESS;ConnectionPooling=0", "sa", "tquila1974");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row)
{
    foreach ($row as $key => $value)
    {
        echo "<strong>".$key."</strong> ".$value."<br>";
    }
    echo "-------------------------------------------------<br>";
}

