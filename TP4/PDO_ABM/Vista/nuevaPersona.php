<?php
include_once "Estructura/Header.php";
?>

<div class="d-flex justify-content-center align-items-center" style="margin-block:5%">

    <form action="Action/accionNuevaPersona.php" method="POST" onsubmit="return validar()">
        <h2>Ejercicio 6: Registrar Nueva Persona</h2><br>
        <!-- DNI -->
        <div class="form-group mb-3">
            <label class="form-label" for="NroDni">Número de DNI:</label><br>
            <input type="text" id="NroDni" name="NroDni" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese un DNI válido.</div>
        </div>
        <!-- Apelldio -->
        <div class="form-group mb-3">
            <label class="form-label" for="Apellido" class="form-label">Apellido:</label><br>
            <input type="text" id="Apellido" name="Apellido" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese apellido.</div>
        </div>
        <!-- Nombre -->
        <div class="form-group mb-3">
            <label class="form-label" for="Nombre" class="form-label">Nombre:</label><br>
            <input type="text" id="Nombre" name="Nombre" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese nombre.</div>
        </div>
        <!-- Fecha de Nacimiento -->
        <div class="form-group mb-3">
            <label class="form-label" for="fechaNac" class="form-label">Fecha de Nacimiento:</label><br>
            <!-- <input type="date" id="fechaNac" name="fechaNac"><br><br> (cambie el date por el text) -->
            <input type="date" id="fechaNac" name="fechaNac" placeholder="Anio/Mes/Día" class="form-control">
            <div class="invalid-feedback">Sí sos menor a 18 no podrás registrarte.</div>
        </div>
        <!-- Telefono -->
        <div class="form-group mb-3">
            <label class="form-label" for="Telefono" class="form-label">Teléfono:</label><br>
            <input type="tel" id="Telefono" name="Telefono" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese un telefono válido.</div>
        </div>
        <!-- Domicilio -->
        <div class="form-group mb-3">
            <label class="form-label" for="Domicilio" class="form-label">Domicilio:</label><br>
            <input type="text" id="Domicilio" name="Domicilio" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese domicilio.</div>
        </div><br>
        <!-- Botones -->
        <input type="hidden" id="accion" name="accion" value="nuevo">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>

</div>
<script src="Assets/js/6.val_NuevaPersona.js"></script>

<?php
include_once "Estructura/Footer.php";
?>