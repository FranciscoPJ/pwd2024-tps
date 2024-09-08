<?php

class Numero{
    function darsigno($num){
        $mensaje = "";
        if($num['numero'] > 0){
            $mensaje = "El numero " . $num['numero'] . " es positivo";
        } elseif ($num['numero'] == 0){
            $mensaje = "El numero " . $num['numero'] . " es cero";
        } else {
            $mensaje = "El numero " . $num['numero'] . " es negativo";
        }
        return $mensaje;
    }

    function contarNumeros($arrayNumero){
        $contador = 0;
        foreach($arrayNumero as $key => $value){
            $contador += $value;
        }
        return $contador;
    }

    
}
?>