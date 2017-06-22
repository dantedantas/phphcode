<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 22.06.2017
 * Time: 11:14
 */
class Documento
{
   private $mycpf;

    /**
     * @return mixed
     */
    public function getMycpf()
    {
        return $this->mycpf;
    }

    /**
     * @param mixed $mycpf
     */
    public function setMycpf($mycpf)
    {
        $validador = Documento::validaCpf($mycpf);

        if ($validador === false) {
            throw new Exception('CPF inválido!', 1);
        }
        $this->mycpf = $mycpf;
    }

    static function validaCpf($cpf):bool {


if(empty($cpf)) {
return false;
}


$cpf = preg_replace('[^0-9]', '', $cpf);
$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


if (strlen($cpf) != 11) {
    return false;
}

else if ($cpf == '00000000000' ||
    $cpf == '11111111111' ||
    $cpf == '22222222222' ||
    $cpf == '33333333333' ||
    $cpf == '44444444444' ||
    $cpf == '55555555555' ||
    $cpf == '66666666666' ||
    $cpf == '77777777777' ||
    $cpf == '88888888888' ||
    $cpf == '99999999999') {
    return false;

} else {

    for ($t = 9; $t < 11; $t++) {

        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf{$c} != $d) {
            return false;
        }
    }

    return true;
}

    }
}


$mycpf = new Documento();
$mycpf->setMycpf("44900211001");
var_dump($mycpf->getMycpf());

?>