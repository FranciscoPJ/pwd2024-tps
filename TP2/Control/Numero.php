<?php

class Numero{
    function darsigno($num){
        $mensaje = "";
        if($num > 0){
            $mensaje = "El numero " . $num . " es positivo";
        } elseif ($num == 0){
            $mensaje = "El numero " . $num . " es cero";
        } else {
            $mensaje = "El numero " . $num . " es negativo";
        }
        return $mensaje;
    }

    function contarNumeros($arrayNumero){
        $contador = 0;
        foreach($arrayNumero as $key => $value){
            $contador+= $value;
        }
        return $contador;
    }

    
}
?>