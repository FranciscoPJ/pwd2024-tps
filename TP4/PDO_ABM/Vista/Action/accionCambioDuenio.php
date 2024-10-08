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


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Persona</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <h3 class="text-center my-4">Datos Actualizados del Auto</h3>

        <div class="alert alert-info text-center">
            <?php
            if ($mensaje == null) {
                echo "Auto Cambiado De Dueño Con Exito!";
            } else
                echo $mensaje;
            ?>
        </div>

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

        <div class="text-center my-4">
            <a href="../CambioDuenio.php" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
// if (isset($auto)) {
//     echo "<pre>";

//     echo "</pre>";

//     // Creamos el string con los datos del auto
//     $datosAuto = "
// <p>Patente: " . $auto[0]->getPatente() . "</p>
// <p>Modelo: " . $auto[0]->getModelo() . "</p>
// <p>Marca: " . $auto[0]->getMarca() . "</p>
// <p>DNI Duenio: " . $auto[0]->getObjDniDuenio()->getNroDni() . "</p>
// ";

//     echo $datosAuto;
// }
?>