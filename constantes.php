<?Php

//define("DBCON", ['102.0.0.1','root','password','banco']);
define("DBCON", ['server' => '102.0.0.1','user' => 'root','senha' => 'password','db' => 'banco']);

print_r(DBCON);

?>
<br><br>
<?Php

print_r(PHP_VERSION);

?>
<br><br>
<?Php

print_r(DIRECTORY_SEPARATOR);

/*
CONSTANTES PRÉ DEFINIDAS

https://secure.php.net/manual/pt_BR/reserved.constants.php


*/
?>