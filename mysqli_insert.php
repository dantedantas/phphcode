<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 07.07.2017
 * Time: 13:55
 */

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error)
{
    echo "Erro: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");

$stmt->bind_param("ss", $login, $pass);

$login = "myuser";
$pass = "12345";

$stmt->execute();