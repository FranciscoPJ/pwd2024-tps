<?php
class Numero{

    public function devolverSigno($info){

        $mensaje = "incorrecto";
        switch($info['numero']){
            case $info['numero'] === 0:
                $mensaje = "cero";
            break;
            case $info['numero'] > 0:
                $mensaje = "positivo";
            break;
            case $info['numero'] < 0:
                $mensaje = "negativo";
            break;
        }

        return $mensaje;

    } 
    
}

?>
