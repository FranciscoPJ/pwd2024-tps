<?php
include_once '../../configuracion.php';

$datos = data_submitted();
//verEstructura($datos);

$abmPersona = new AbmPersona();
$objPersona = $abmPersona->darArray($datos);
//verEstructura($objPersona);
?>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Persona</title>
    <!--  Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <?php
        if ($objPersona) {
            // Mostrar formulario con los datos de la persona
            echo '<form id="personaForm" action="ActualizarDatosPersona.php" method="POST" class="w-50" onsubmit="return validar()">';
            echo '<h1 ">Actualizar datos:</h1>';
            // DNI hidden
            echo '<input type="hidden" id="NroDni" name="NroDni" value="' . htmlspecialchars($objPersona[0]["'NroDni'"]) . '">';
            // Apellido
            echo '<div class="mb-3">';
            echo '<label for="Apellido" class="form-label">Apellido:</label>';
            echo '<input type="text" class="form-control" id="Apellido" name="Apellido" value="' . htmlspecialchars($objPersona[0]['Apellido']) . '">';
            echo '<div class="invalid-feedback">El apellido es requerido y solo puede contener letras.</div>';
            echo '</div>';
            // Nombre
            echo '<div class="mb-3">';
            echo '<label for="Nombre" class="form-label">Nombre:</label>';
            echo '<input type="text" class="form-control" id="Nombre" name="Nombre" value="' . htmlspecialchars($objPersona[0]["Nombre"]) . '">';
            echo '<div class="invalid-feedback">El nombre es requerido y solo puede contener letras.</div>';
            echo '</div>';
            // Fecha de Nacimiento
            echo '<div class="mb-3">';
            echo '<label for="fechaNac" class="form-label">Fecha de Nacimiento:</label>';
            echo '<input type="date" class="form-control" id="fechaNac" name="fechaNac" value="' . htmlspecialchars($objPersona[0]['fechaNac']) . '">';
            echo '<div class="invalid-feedback">Por favor, ingrese una fecha válida.</div>';
            echo '</div>';
            // Telefono
            echo '<div class="mb-3">';
            echo '<label for="Telefono" class="form-label">Telefono:</label>';
            echo '<input type="text" class="form-control" id="Telefono" name="Telefono" value="' . htmlspecialchars($objPersona[0]['Telefono']) . '">';
            echo '<div class="invalid-feedback">El telefono es requerido y debe ser un número válido.</div>';
            echo '</div>';
            // Domicilio
            echo '<div class="mb-3">';
            echo '<label for="Domicilio" class="form-label">Domicilio:</label>';
            echo '<input type="text" class="form-control" id="Domicilio" name="Domicilio" value="' . htmlspecialchars($objPersona[0]['Domicilio']) . '">';
            echo '<div class="invalid-feedback">El domicilio es requerido.</div>';
            echo '</div>';
            echo '<div class="d-flex  my-4">';

            // Submit
            echo '<input id="accion" name="accion" value="editar" type="hidden">';
            echo '<input type="submit" class="btn btn-primary" value="Actualizar">';


            // Fin form
            echo '</form>';
            echo '<a href="../buscarPersona.php" class="btn btn-secondary">Volver</a>';
            echo '</div>';
        } else {
            echo '<div>Persona no encontrada.</div><br>';
            echo '<a href="../buscarPersona.php" class="btn btn-secondary">Volver a Buscar Persona</a>';
        }
        ?>

    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- script de validación -->
    <script src="../Assets/js/9.accionBuscarPersona.js"></script>
</body>

</html>