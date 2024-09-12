<?php
include_once '../../configuracion.php';

$datos = data_submitted();


//verEstructura($datos);
$resp = false;
$objAbmAuto = new AbmAuto();
$ObjPersona = new AbmPersona();
$mensaje= "";
$mensajePersona = "";
$nuevosDatos;
$auto="";
if (isset($datos['Patente']) && isset($datos['NroDni'])){

    $patente = $datos['Patente'];
    $doc = $datos['NroDni'] ;
    
$auto =$objAbmAuto->Buscar($datos);

$persona = $ObjPersona->Buscar($datos);
if(!$auto || !$persona){
    $auto=null;
    $mensaje="Auto o Persona no encontrados";
}else if($persona[0]){
    if($datos['NroDni'] === $auto[0]->getObjDniDuenio()->getNroDni()){
        $mensaje="El auto ya pertenece a esta persona" ;
    }
    else if(!$mensaje){
        $auto[0]->getObjDniDuenio()->setNroDni($datos['NroDni']);
      $ArrayAuto = (array)$auto[0];
    
        $objAbmAuto->modificacion($ArrayAuto);
       
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
    <span> <?php echo $mensaje ?></span>
    <div>
    <?php
    if (isset($auto)) {
            echo "<pre>";
    
    echo "</pre>";

    // Creamos el string con los datos del auto
    $datosAuto = "
    <p>Patente: " . $auto[0]->getPatente() . "</p>
    <p>Modelo: " . $auto[0]->getModelo()  . "</p>
    <p>Marca: " . $auto[0]->getMarca()  . "</p>
    <p>DNI Duenio: ".$auto[0]->getObjDniDuenio()->getNroDni()."</p>
    ";

    echo $datosAuto;
    }
    ?>
    </div>

    <br><a href="../CambioDuenio.php">Volver</a><br>

    </body>
</html>