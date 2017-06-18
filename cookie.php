<?php
// envia os cookies
setcookie("cookie[tres]", "cookietres");
setcookie("cookie[dois]", "cookiedois");
setcookie("cookie[um]", "cookieum");

// Depois que a página recarregar, mostra eles
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $nome => $valor) {
        $nome = htmlspecialchars($nome);
        $valor = htmlspecialchars($valor);
        echo "$nome : $valor <br />\n";
    }
}
?>


<?php
/*
$value = 'alguma coisa de algum lugar';

setcookie("CookieTeste", $value);
setcookie("CookieTeste", $value, time()+3600);  // expira em 1 hora 
setcookie("CookieTeste", $value, time()+3600, "/~rasmus/", ".example.com", 1);

// Mostra um cookie individual
echo $_COOKIE["CookieTeste"];

// Outra maneira de depurar(debug)/testar é vendo todos os cookies
print_r($_COOKIE);

// Configura a data de expiração para uma hora atrás
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
setcookie("CookieTeste", "", time() - 3600);
setcookie("CookieTeste", "", time() - 3600, "/~rasmus/", ".example.com", 1);

Want to remove a cookie?

Many people do it the complicated way:
setcookie('name', 'content', time()-3600);

But why do you make it so complicated and risk it not working, when the client's time is wrong? Why fiddle around with time();

Here's the easiest way to unset a cookie:
setcookie('name', 'content', 1);

Thats it.
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

*/

?>