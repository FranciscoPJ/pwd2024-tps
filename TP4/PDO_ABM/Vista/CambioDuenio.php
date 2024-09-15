<?php
//include_once "../configuracion.php";
include_once "Estructura/Header.php";
?>

<!-- <script>
    function Validacion() {
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
</script> -->


<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form id="cambioDuenio" action="Action/accionCambioDuenio.php" method="GET" onsubmit="return validar()" style="width: 500px; margin:10% auto ;">
        <h2>Cambiar de dueño</h2>

        <div class="mb-3">
            <label for="patente" class="form-label">Patente</label>
            <input type="text" id="patente" name="Patente" class="form-control">
            <!-- <span id="msj-patente" class="text-danger fw-semibold"></span> -->
            <div class="invalid-feedback">Por favor, ingrese un número de patente válido.</div>

        </div>
        <div class="mb-3">
            <label for="doc" class="form-label">DNI</label>
            <input type="text" id="doc" name="NroDni" class="form-control">
            <!-- <span id="msj-doc" class="text-danger fw-semibold"></span> -->
            <div class="invalid-feedback">Por favor, ingrese un DNI válido.</div>

        </div>
        <input type="submit" class="btn btn-primary" value="Cambiar">
    </form>
</div>

<script src="Assets/js/8.val_cambioDuenio.js"></script>

<?php
include_once "Estructura/Footer.php";
?>