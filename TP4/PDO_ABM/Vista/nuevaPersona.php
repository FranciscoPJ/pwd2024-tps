<?php
include_once "Estructura/Header.php";
?>

<div class="d-flex justify-content-center align-items-center" style="margin-block:5%">>

    <form action="Action/accionNuevaPersona.php" method="POST" onsubmit="return validar()">
        <h2>Registrar Nueva Persona</h2>

        <div class="form-group">
            <label for="NroDni">Número de DNI:</label><br>
            <input type="text" id="NroDni" name="NroDni" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese un DNI válido.</div>

        </div>

        <div class="form-group">
            <label for="Apellido" class="form-label">Apellido:</label><br>
            <input type="text" id="Apellido" name="Apellido" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese un DNI válido.</div>

        </div>

        <div class="form-group">
            <label for="Nombre" class="form-label">Nombre:</label><br>
            <input type="text" id="Nombre" name="Nombre" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese un DNI válido.</div>

        </div>

        <div class="form-group">
            <label for="fechaNac" class="form-label">Fecha de Nacimiento:</label><br>
            <!-- <input type="date" id="fechaNac" name="fechaNac"><br><br> (cambie el date por el text) -->

            <input type="text" id="fechaNac" name="fechaNac" placeholder="anio-mes-dia" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese un DNI válido.</div>

        </div>

        <div class="form-group">
            <label for="Telefono" class="form-label">Teléfono:</label><br>
            <input type="tel" id="Telefono" name="Telefono" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese un DNI válido.</div>

        </div>

        <div class="form-group">
            <label for="Domicilio" class="form-label">Domicilio:</label><br>
            <input type="text" id="Domicilio" name="Domicilio" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese un DNI válido.</div>

        </div>

        <input type="hidden" id="accion" name="accion" value="nuevo">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>

</div>
<script src="Assets/js/6.val_NuevaPersona.js"></script>

<?php
include_once "Estructura/Footer.php";
?>