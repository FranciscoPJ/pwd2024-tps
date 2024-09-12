<?php 
include_once '../configuracion.php';

$obj = new Persona();
$obj->setear('',' test objeto Tabla','', '', '', '');

 /* insertar */ 
if($obj->insertar()){
    echo "<br> El registro se inserto correctamente";
    verEstructura($obj);
}else 
    echo "<br>".$obj->getmensajeoperacion();

$obj->setNroDni("nuevo valor dni para la variable instancia del objeto");
$obj->setApellido("nuevo valor apellido para la variable instancia del objeto");
$obj->setNombre("nuevo valor nombre para la variable instancia del objeto");
$obj->setFechaNac("nuevo valor fecha de Nacimiento para la variable instancia del objeto");
$obj->setTelefono("nuevo valor telefono para la variable instancia del objeto");
$obj->setDomicilio("nuevo valor domicilio para la variable instancia del objeto");

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