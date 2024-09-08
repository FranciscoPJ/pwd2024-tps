<?php
class Persona{
    
    public function descripcionDatos($arrayDatos){
        return "Hola, yo soy " . $arrayDatos['nombre'] . ", " . $arrayDatos['apellido'] . " tengo " . $arrayDatos['edad'] . " años y vivo en " . $arrayDatos['direccion'] . ".";
    }

    public function mayorDeEdad($arrayDatos){        
        $edad = $arrayDatos['edad'];
        $nombre = $arrayDatos['nombre'];
        $apellido = $arrayDatos['apellido'];

        if ($edad >= 18) {
            $mensaje = "Soy mayor de edad.";
        } else {
            $mensaje = "Soy menor de edad.";
        }
        return $mensaje;
    }

    public function darEstudio($colDatos){
        $estudio = null;

        if($colDatos['estudio'] == 1){
            $estudio = "No tengo estudios";
        } elseif ($colDatos['estudio'] == 2){
            $estudio = "Tengo estudios primarios.";
        } else {
            $estudio = "Tengo estudios secundarios.";
        }
        return $estudio;
    }

    public function cantDeportes($colDeportes){
        $mensaje = "";
        $cantidad = count($colDeportes);
        $mensaje .= "La cantidad de deportes que practico son: " . $cantidad . ".";
        return $mensaje;
    }

}

?>