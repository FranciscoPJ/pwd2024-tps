

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


<main>
<?php
include_once "estructura/Header.php";
?>
<form id="cambioDuenio" action="Action/accionCambioDuenio.php" method="GET" onclick="return Validacion()" style="width: 500px; margin:10% auto ;">
    <div class="mb-3">
        <label for="patente" class="form-label">Patente</label>
        <input type="text" id="patente" name="Patente" class="form-control">
        <span id="msj-patente" class="text-danger fw-semibold"></span>
    </div>
    <div class="mb-3">
        <label for="doc" class="form-label">DNI</label>
        <input type="text" id="doc" name="NroDni" class="form-control">
        <span id="msj-doc" class="text-danger fw-semibold"></span>
    </div>
    <input type="submit" class="btn btn-primary">
</form>
    <script>
        function Validacion(){
    $(document).ready(function() {
        // Escuchar el evento submit del formulario
        $('#cambioDuenio').on('submit', function(event) {
            // Prevenir el envío del formulario si no pasa las validaciones
            var isValid = true;
            var patente = $('#patente').val().trim();
            var doc = $('#doc').val().trim();

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
        }
        </script>

    </main>

</body>

</html>
<?php
include_once "estructura/Footer.php";
?>