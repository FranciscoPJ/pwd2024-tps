<?php
class Persona{

    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;

	public function __construct() {

		$this->nombre = null;
		$this->apellido = null;
		$this->edad = null;
		$this->direccion = null;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function getApellido() {
		return $this->apellido;
	}

	public function getEdad() {
		return $this->edad;
	}

    public function getDireccion() {
		return $this->direccion;
	}

    public function setNombre($value) {
		$this->nombre = $value;
	}

    public function setApellido($value) {
		$this->apellido = $value;
	}

	public function setEdad($value) {
		$this->edad = $value;
	}

	public function setDireccion($value) {
		$this->direccion = $value;
	}

	public function esNumero($num){
		return is_numeric($num);
	}

	
}
?>