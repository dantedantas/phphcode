<?php

// Depois que a página recarregar, mostra eles
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $nome => $valor) {
        $nome = htmlspecialchars($nome);
        $valor = htmlspecialchars($valor);
        echo "$nome : $valor <br />\n";
    }
}
?>