<?php
include_once '../../configuracion.php';

$datos = data_submitted();
//verEstructura($datos);   
$abmPersona = new AbmPersona();

//verEstructura($objPersona);
$resp = false;
if (isset($datos['accion'])) {

    if($datos['accion']=='editar'){        
        $resp = $abmPersona->modificacion($datos);
    }

}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Persona</title>
    <!-- Incluye Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <?php
        if ($resp == 1) {
            echo '<div class="alert alert-success" role="alert">';
            echo '<h4 class="alert-heading">Persona Modificada</h4>';
            echo "<p>Persona modificada con éxito.</p>";
            echo '</div>';
        } elseif ($resp == 0) {
            echo '<div class="alert alert-secondary" role="alert">';
            echo '<h4 class="alert-heading">Persona Sin Modificacion</h4>';
            echo "<p>No se realizaron cambios en la persona.</p>";
            echo '</div>';
        } elseif ($resp == -1) {
            echo '<div class="alert alert-danger" role="alert">';
            echo '<h4 class="alert-heading">Error Valores Nulos</h4>';
            echo "<p>Error: No se permiten valores vacíos o nulos en los campos requeridos.</p>";
            echo '</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">';
            echo '<h4 class="alert-heading">Error Valores Nulos</h4>';
            echo "<p>La acción de modificacion no pudo concretarse.</p>";
            echo '</div>';
        }
        ?>

        <br>
        <a href="accionBuscarPersona.php" class="btn btn-secondary">Volver</a>
    </div>

    <!-- Incluye Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
