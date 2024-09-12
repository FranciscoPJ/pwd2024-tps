<?php
include_once '../../configuracion.php';

$datos = data_submitted();
//verEstructura($datos);   
$abmPersona = new AbmPersona();

//verEstructura($objPersona);
$resp = false;
if (isset($datos['accion'])) {

    if($datos['accion']=='editar'){        
        if($abmPersona->modificacion($datos)){
            $resp = true;
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
        <?php
        if ($resp) {
            echo "<h3>Persona Modificada</h3><br>";
            echo "<div>La accion " . $datos['accion'] . " se realizo correctamente.</div>";
        } else {
            echo "<div>La accion " . $datos['accion'] . " no pudo concretarse.</div>";
        }
        ?>

    <br><a href="accionBuscarPersona.php">Volver</a><br>

</body>

</html>