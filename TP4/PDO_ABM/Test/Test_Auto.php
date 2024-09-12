<?php 
include_once '../configuracion.php';

$obj = new Auto();
$duenio = new Persona();
$valorDuenio = $duenio->setNroDni('');
$obj->setear('',' test objeto Tabla', '', $valorDuenio);

 /* insertar */ 
if($obj->insertar()){
    echo "<br> El registro se inserto correctamente";
    verEstructura($obj);
}else 
    echo "<br>".$obj->getmensajeoperacion();

$obj->setPatente("nuevo valor Patente para la variable instancia del objeto");
$obj->setMarca("nuevo valor Marca para la variable instancia del objeto");
$obj->setModelo("nuevo valor Modelo para la variable instancia del objeto");
//$obj->setFechaNac("nuevo valor fecha de Nacimiento para la variable instancia del objeto"); (no que que hacer, se que hay que setear aun no lo descubro)

 /* modificar */ 
if($obj->modificar()){
    echo "<br> El registro se actualizo correctamente";
    verEstructura($obj);
}else
        echo "<br>".$obj->getmensajeoperacion();


 /* eliminar */       
if($obj->eliminar())
    echo "<br> El registro se elimino correctamente";
else
    echo "<br>".$obj->getmensajeoperacion();

?>