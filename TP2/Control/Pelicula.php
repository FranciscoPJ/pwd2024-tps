<?php
class Pelicula{
    private $colDatos;

	public function __construct() {
		$this->colDatos = [];
	}

	public function getColDatos() {
		return $this->colDatos;
	}

	public function setColDatos($value) {
		$this->colDatos = $value;
	}

    public function mostrarEdadRestringida($valor){
        $mensaje = "";
        
        if($valor == "1"){
            $mensaje = "Todos los Publicos";
        } elseif($valor == "2") {
            $mensaje = "Mayores de 7 años";
        } else {
            if($valor == "3"){
                $mensaje = "Mayores de 18 años";
            }
        }
        return $mensaje;
    }

    public function infoPelicula($pelicula){

        $edadElegida = $this->mostrarEdadRestringida($pelicula['restricciones']);

        $colDatos = [
            "Titulo" => $pelicula['titulo'],
            "Actores" => $pelicula['actores'],
            "Director" => $pelicula['director'],
            "Guion" => $pelicula['guion'],
            "Produccion" => $pelicula['produccion'],
            "Anio" => $pelicula['anio'],
            "Nacionalidad" => $pelicula['nacionalidad'],
            "Genero" => $pelicula['genero'],
            "Duracion" => $pelicula['duracion'],
            "Restricciones de edad" => $edadElegida
        ];

        return $colDatos;
    }
}
?>