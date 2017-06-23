<?php
class Carro {
	
	private $modelo;
    private $motor;
    private $ano;

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @return mixed
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * @param mixed $motor
     */
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function __construct($modelo, $motor, $ano)
    {

        $this->setModelo($modelo);
        $this->setMotor($motor);
        $this->setAno($ano);

    }

    public function __destruct()
    {
         echo "<br><br><br><br><br>Objeto Destruido!";
    }

    /**
     *
     */
    public function __toString()
    {
        return "<br><br>Modelo: ".$this->getModelo()." Motor: ".$this->getMotor()." Ano: ".$this->getAno();
    }
}


$meucarro = new Carro("KIA", "1.6", "2015");
echo $meucarro;


?>