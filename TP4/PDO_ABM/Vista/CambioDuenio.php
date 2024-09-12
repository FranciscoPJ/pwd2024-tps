<?php
include_once "estructura/Header.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Cambio de duenio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php
    include_once "../configuracion.php";

    ?>

<<<<<<< HEAD
    <main>
        <form id="cambioDuenio" action="Action/accionCambioDuenio.php">
            <div>
                <label for="patente">Patente</label>
                <input type="text" id="patente" class="form-control">
                <span id="msj-patente" class="text-danger fw-semibold"></span>
            </div>
            <div>
                <label for="doc">DNI</label>
                <input type="text" id="doc" name="doc">
                <span id="msj-doc" class="text-danger fw-semibold"></span>
            </div>
            <input type="submit" class="form-control">
        </form>
        <script>
            $(document).ready(function() {
                // Escuchar el evento submit del formulario
                $('#cambioDuenio').on('submit', function(event) {
                    // Prevenir el envío del formulario si no pasa las validaciones
                    var isValid = true;
                    var patente = $('#patente').val().trim();
                    var doc = $('#doc').val().trim();
=======
<main>
<form id="cambioDuenio" action="Action/accionCambioDuenio.php" method="GET">
    <div>
        <label for="patente">Patente</label>
        <input type="text" id="patente" name="Patente" class="form-control">
        <span id="msj-patente" class="text-danger fw-semibold"></span>
    </div>
    <div>
        <label for="doc">DNI</label>
        <input type="text" id="doc" name="NroDni">
        <span id="msj-doc" class="text-danger fw-semibold"></span>
    </div>
    <input type="submit" class="form-control">
</form>
    <script>
    $(document).ready(function() {
        // Escuchar el evento submit del formulario
        $('#cambioDuenio').on('submit', function(event) {
            // Prevenir el envío del formulario si no pasa las validaciones
            var isValid = true;
            var patente = $('#patente').val().trim();
            var doc = $('#doc').val().trim();
>>>>>>> 9fddd7341c092484d2dc07443baeba68e8700e5b

                    if (patente === '') {
                        isValid = false;
                        $('#msj-patente').html('')
                        $('#msj-patente').html('La patente es obligatoria.');
                        $('#patente').addClass(' border-danger');
                    }

                    if (doc === '') {
                        isValid = false;
                        $('#msj-doc').html('')
                        $('#msj-doc').html('El DNI es obligatorio.');
                        $('#doc').addClass('form-control border-danger');
                    } else if (!/^\d+$/.test(doc)) {
                        isValid = false;
                        $('#msj-doc').html('')
                        $('#msj-doc').html('El DNI debe contener solo números.');

                        $('#doc').addClass('form-control border-danger');
                    }

                    if (!isValid) {
                        event.preventDefault();
                    }
                });
            });
        </script>

    </main>

</body>

</html>
<?php
include_once "estructura/Footer.php";
?>