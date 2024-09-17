<?php
include_once '../../configuracion.php';

$datos = data_submitted();


//verEstructura($datos);
$resp = false;
$objAbmAuto = new AbmAuto();
$ObjPersona = new AbmPersona();
$mensaje = "";
$mensajePersona = "";
$nuevosDatos;
$auto = "";
$datosAuto = null;
if (isset($datos['Patente']) && isset($datos['NroDni'])) {

    $patente = $datos['Patente'];
    $doc = $datos['NroDni'];
  
    $auto = $objAbmAuto->darArray($datos);
    $objPersona = $ObjPersona->buscar($datos);
    $persona = $ObjPersona->darArray($datos);
    if (!$auto || !$persona) {
        $auto = null;
        $mensaje = "Patente del Auto o Persona no encontrados";
    } else if ($persona[0]) {
     
        if ($datos['NroDni'] == $auto[0]['ObjDniDuenio']['NroDni']) {
            $mensaje = "El auto ya pertenece a esta persona";
            $auto = null;

        } else if (!$mensaje) {
           
            $auto[0]['ObjDniDuenio']['NroDni']=$persona[0]['NroDni'];

            $arrayAuto = [
                "Patente" => $auto[0]["Patente"],
                "Marca" => $auto[0]["Marca"],
                "Modelo" => $auto[0]["Modelo"],
                "DniDuenio" => $objPersona[0],
            ];
         
            if (!$objAbmAuto->modificacion($arrayAuto)) {
                $auto = null;
            }

        }
    }
}
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <p>Patente: " . $auto[0]["Patente"] . "</p>
    <p>Modelo: " . $auto[0]["Marca"] . "</p>
    <p>Marca: " . $auto[0]["Modelo"] . "</p>
    <p>DNI Duenio: " . $auto[0]['ObjDniDuenio']['NroDni'] . "</p>
    ";

            echo $datosAuto;
        }
        ?>
    </div>

    <br><a href="../CambioDuenio.php">Volver</a><br>

</body>

</html>