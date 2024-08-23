<?php
class Cliente{

    private $edad;
    private $estudio;

	public function __construct() {

		$this->edad = null;
		$this->estudio = null;
	}

	public function getEdad() {
		return $this->edad;
	}

    public function getEstudio() {
		return $this->estudio;
	}

	public function setEdad($value) {
		$this->edad = $value;
	}

	public function setEstudio($value) {
		$this->estudio = $value;
	}


	public function esEstudiante($edad, $esEstudiante){
		$precio = 0;
		if ($esEstudiante == 'si' && $edad < 12) { //aca hay un erro, deberia ser "||"
            $precio = 160;
        } elseif ($esEstudiante == 'si' && $edad >= 12) {
            $precio = 180;
        } else {
            $precio = 300;
        }
		return $precio;
	}
}
?>