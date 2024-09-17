<?php
include_once '../../configuracion.php';

$datos = data_submitted();


$objAbmPersona = new AbmPersona();
$resp = false;
if (isset($datos['accion'])) {
    if (!$objAbmPersona->existePersona(["NroDni" => $datos['NroDni']])) { //si no existe el objeto, agregar persona
        if ($datos['accion'] == 'nuevo') {
            if ($objAbmPersona->alta($datos)) { // agrega el objeto a la BD
                $resp = true;
            }
        }
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Persona</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h3 class="card-title">Nueva Persona</h3>
                        <div class=" alert-info mt-3">
                            <?php

                            if ($resp) {
                                echo "<div class='alert alert-success text-center'>";
                                echo "Se registro exitosamente la persona.";
                                echo "<div/>";
                            } else {
                                echo "<div class='alert alert-danger text-center'>";
                                echo "No Se Pudo Registrar La Nueva Persona.<br>Este DNI Ya Existe.";
                                echo "<div/>";
                            }

                            ?>
                        </div>
                        <a href="../nuevaPersona.php" class="btn btn-primary mt-3">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>