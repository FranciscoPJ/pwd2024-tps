<?php
class Persona{

    private $nombre;
    private $apellido;
    private $edad;
    private $estudio;
	private $sexo;
	private $deportes;

	public function __construct() {

		$this->nombre = null;
		$this->apellido = null;
		$this->edad = null;
		$this->estudio = null;
		$this->sexo = null;
		$this->deportes = null;
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

	public function getDeportes() {
		return $this->deportes;
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

	public function setDeportes($value) {
		$this->deportes = $value;
	}

	public function cantDeportes($deportes){
		$cantidadDeportes = null;
		if (isset($deportes['deportes'])) {
            $deporte = $deportes['deportes'];
            $cantidadDeportes = count($deporte);		
	
		}
		return $cantidadDeportes;
	}
}
?>