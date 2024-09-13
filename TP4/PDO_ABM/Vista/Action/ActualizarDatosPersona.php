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
        if ($resp) {
            echo '<div class="alert alert-success" role="alert">';
            echo '<h4 class="alert-heading">Persona Modificada</h4>';
            echo '<p>La acción ' . htmlspecialchars($datos['accion']) . ' se realizó correctamente.</p>';
            echo '</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">';
            echo '<h4 class="alert-heading">Error</h4>';
            echo '<p>La acción ' . htmlspecialchars($datos['accion']) . ' no pudo concretarse.</p>';
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
