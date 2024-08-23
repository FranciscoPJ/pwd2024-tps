<?php
class Persona{

    private $nombre;
    private $apellido;
    private $edad;
    private $estudio;
	private $sexo;

	public function __construct() {

		$this->nombre = null;
		$this->apellido = null;
		$this->edad = null;
		$this->estudio = null;
		$this->sexo = null;
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

    public function getEstudio() {
		return $this->estudio;
	}

	public function getSexo() {
		return $this->sexo;
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

	public function setEstudio($value) {
		$this->estudio = $value;
	}

	public function setSexo($value) {
		$this->sexo = $value;
	}

}
?>