<?php
include_once "Estructura/Header.php";
?>

    <h2>6- Registrar Nueva Persona</h2>
<div class="d-flex justify-content-center align-items-center" style="margin-block:5%">
    <form action="Action/accionNuevaPersona.php" method="POST">
    <div class="form-group">
        <label for="NroDni">Número de DNI:</label><br>
        <input type="text" id="NroDni" name="NroDni" class="form-control"><br><br>
        </div>
        <div class="form-group">
        <label for="Apellido">Apellido:</label><br>
        <input type="text" id="Apellido" name="Apellido" class="form-control"><br><br>
        </div>
        <div class="form-group">
        <label for="Nombre">Nombre:</label><br>
        <input type="text" id="Nombre" name="Nombre" class="form-control"><br><br>
        </div>
        <div class="form-group">
        <label for="fechaNac">Fecha de Nacimiento:</label><br>
        <!-- <input type="date" id="fechaNac" name="fechaNac"><br><br> (cambie el date por el text) -->
        <input type="text" id="fechaNac" name="fechaNac" placeholder="anio-mes-dia" class="form-control"><br><br>
        </div>
        <div class="form-group">
        <label for="Telefono">Teléfono:</label><br>
        <input type="tel" id="Telefono" name="Telefono" class="form-control"><br><br>
        </div>
        <div class="form-group">
        <label for="Domicilio">Domicilio:</label><br>
        <input type="text" id="Domicilio" name="Domicilio" class="form-control"><br><br>
</div>
        <input type="hidden" id="accion" name="accion" value="nuevo">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>

    </div>
<?php
include_once "Estructura/Footer.php";
?>