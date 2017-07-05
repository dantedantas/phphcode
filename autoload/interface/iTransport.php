<?php

interface iTransport
{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function passarMarcha($marcha);

}

?>