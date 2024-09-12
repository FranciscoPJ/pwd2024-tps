<?php
include_once '../../configuracion.php';

$datos = data_submitted();
//print_r($datos);

//verEstructura($datos);
$resp = false;
$objAbmAuto = new AbmAuto();
$ObjPersona = new AbmPersona();
$mensaje= "";
$mensajePersona = "";
$nuevosDatos;
if (isset($datos['Patente']) && isset($datos['NroDni'])){

    $patente = $datos['Patente'];
    $doc = $datos['NroDni'] ;
    
$auto =$objAbmAuto->Buscar($datos);
 $actualObjPersona= $auto[0]->getObjDniDuenio();
$persona = $ObjPersona->Buscar($datos);
if(!$auto || !$persona){
    $mensaje="Auto o Persona no encontrados";
}else if($persona[0]){
    if($actualObjPersona->getNroDni() === $datos['NroDni']){
        $mensaje="El auto ya pertenece a esta persona" ;
    }
    else if(!$mensaje){
        print_r($auto[0]);
        $nuevosDatos = $auto[0];
        $auto[0]->setObjDniDuenio($persona[0]);
        $auto[0]->modificacion( $nuevosDatos);
       
    }
}


}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
    <title>Nueva Persona</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

    <body>
    <h3>Datos Actualizados del Auto</h3>
    <span> <?php echo $mensajeAuto ?></span>
    <span> <?php echo $mensaje ?></span>
    <div>
    <?php
    if (isset($nuevosDatos)) {
        $datosAuto = "
        <p>Patente: " . $nuevosDatos->getPatente() . "</p> 
        <p>Modelo: " . $nuevosDatos->getModelo() . "</p> 
         <p>Modelo: " . $nuevosDatos->getMarca() . "</p> 
        <p>DNI Dueño: " . $nuevosDatos->getObjDniDuenio()->getNroDni() . "</p>
        ";
        echo $datosAuto;
    }
    ?>
    </div>

    <br><a href="../nuevaPersona.php">Volver</a><br>

    </body>
</html>