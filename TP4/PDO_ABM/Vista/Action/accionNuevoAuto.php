<?php
include_once '../../configuracion.php';

$datos = data_submitted();
//print_r($datos);

$objAbmPersona = new AbmPersona();
$objAbmAuto = new AbmAuto();
$resp = null;

if (isset($datos['accion'])) {

    if ($datos['accion'] == 'nuevo') {   // accedo a registrar un objeto a la bd  

        if ($objAbmPersona->existePersona(["NroDni" => $datos['DniDuenio']])) { //si  existe el objeto persona, agregar persona

            $objPersona = $objAbmPersona->buscar(["NroDni" => $datos['DniDuenio']]); // obtengo el objeto
            $datos['DniDuenio'] = $objPersona; //le agrego un objetoDuenio al auto

            if (!$objAbmAuto->existeAuto(["Patente" => $datos['Patente']])) {  // si no existe el objeto auto, agrega auto

                if ($objAbmAuto->alta($datos)) { // agrega el objeto auto a la BD

                    $resp = 3; // se agrego el auto con exito
                }
            } else { // La patente existe, debe poner otro patente
                $resp = 2;
            }
        } else { //sino (No existe la persona ingresada)
            $resp = 1;
        } //fin else 

    } // fin de pregunat accion "nuevo" 
}


?>


</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Persona</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="table-responsive mx-5">

    <?php

    if ($resp == 3) {
        echo "<div class='alert alert-success text-center' >";
        echo "<h3>Nuevo Auto Ingresado!</h3>";
        echo "<p>La Acción Agregar Auto se realizó correctamente.</p>";
        echo "</div>";
        echo "<div class='text-center my-3'><a href='../NuevoAuto.php' class='btn btn-primary'>Ir al Formulario</a></div>";
    } elseif ($resp == 2) {
        echo "<div class='alert alert-danger text-center'>";
        echo "<h3>Error:</h3>";
        echo "<p>Este Auto ya existe, elija otra patente.</p>";
        echo "</div>";
        echo "<div class='text-center my-3'><a href='../NuevoAuto.php' class='btn btn-primary'>Ir al Formulario Auto</a></div>";
    } elseif ($resp == 1) {
        echo "<div class='alert alert-danger text-center'>";
        echo "<h3>Error:</h3>";
        echo "<p>No existe esta persona, no está registrada.</p>";
        echo "</div>";
        echo "<div class='text-center my-3'><a href='../nuevaPersona.php' class='btn btn-primary'>Ir al Formulario Persona</a></div>";
    } else {
        echo "<div class='alert alert-danger text-center'>";
        echo "<h3>Error:</h3>";
        echo "<p>Datos no ingresados.</p>";
        echo "</div>";
        echo "<div class='text-center my-3'><a href='../NuevoAuto.php' class='btn btn-primary'>Ir al Formulario Auto</a></div>";
    }
    ?>

    <div class="text-center my-4">
        <a href="../../../../Menu.php" class="btn btn-secondary">Volver al Menú</a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>