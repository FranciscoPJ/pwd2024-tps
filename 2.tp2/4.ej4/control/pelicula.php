<?php
class Pelicula{
    private $datos;

	public function __construct() {

		$this->datos = [];
	}

	public function getDatos() {
		return $this->datos;
	}

	public function setDatos($value) {
		$this->datos = $value;
	}

    public function devolverDatos($titulo, $actores, $director, $guion, $produccion, $anio, $nacionalidad, $genero, $duracion, $restriccionesEdad){
        
        $datos = [
            "Titulo" => $titulo,
            "Actores" => $actores,
            "Director" => $director,
            "Guion" => $guion,
            "Produccion" => $produccion,
            "Anio" => $anio,
            "Nacionalidad" => $nacionalidad,
            "Genero" => $genero,
            "Duracion" => $duracion,
            "Restricciones de edad" => $restriccionesEdad
        ];

        $this->setDatos($datos);
        
        return $datos;
    }
}
?>