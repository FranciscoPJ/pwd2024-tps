<?php
include_once '../../configuracion.php';

$datos = data_submitted();
//print_r($datos);

$objAbmPersona = new AbmPersona();
$resp = false;
if (isset($datos['accion'])){
    if(!$objAbmPersona->existePersona(["NroDni" => $datos['NroDni']])){ //si no existe el objeto, agregar persona
        if($datos['accion']=='nuevo'){
            if($objAbmPersona->alta($datos)){ // agrega el objeto a la BD
                $resp =true;
            }
            
        }
    } 
}

if($resp){
    $mensaje = "La accion ".$datos['accion']." se realizo correctamente.";
}else {
    $mensaje = "La accion ".$datos['accion']." no pudo concretarse.";
}
?>

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
    <title>Nueva Persona</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

    <body>
    <h3>Nueva Persona</h3>
    <div>
    <?php	
    echo $mensaje;
    ?>
    </div>

    <br><a href="../nuevaPersona.php">Volver</a><br>

    </body>
</html>