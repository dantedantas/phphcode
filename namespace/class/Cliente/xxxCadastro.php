<?php

namespace Cliente;

class cCadastro extends \cCadastro {

    public function registrarVenda() {
        echo "Foi registrada uma venda para o cliente ". $this->getNome();
    }

} // Fim da Class

?>