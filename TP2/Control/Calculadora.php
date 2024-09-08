<?php
class Calculadora{

    public function operacion($colOperacion){
        $formula = null;

        if($colOperacion['operacion'] == "suma"){
            $formula = $this->sumar($colOperacion['numero1'], $colOperacion['numero2']);
        } elseif($colOperacion['operacion'] == "resta"){
            $formula = $this->restar($colOperacion['numero1'], $colOperacion['numero2']);
        } else {
            if($colOperacion['operacion'] == "multiplicacion"){
                $formula = $this->multiplicar($colOperacion['numero1'], $colOperacion['numero2']);
            }
        }
        return $formula;
    }

    public function sumar($num1, $num2){
        return $num1 + $num2;
    }

    public function restar($num1, $num2){
        return $num1 - $num2;
    }

    public function multiplicar($num1, $num2){
        return $num1 * $num2;
    }

    public function esEstudiante($arrayEstudiante){
        $edad = $arrayEstudiante['edad'];
        $esEstudiante = $arrayEstudiante['operacion'];
		$precio = 0;
        
		if ($esEstudiante == 'si' || $edad < 12) {
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