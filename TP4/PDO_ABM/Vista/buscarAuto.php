<?php
include_once "Estructura/Header.php";
?>
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="Action/accionBuscarAuto.php" method="POST" onsubmit="return validar()">
        <h2>Ejercicio 4: Buscar Auto</h2>

        <div class="form-group">
            <label for="patente">Nro Patente</label><br>
            <input type="text" id="Patente" class="form-control" name="Patente" placeholder="Ingrese un numero de patente" style="width: 300px;">
            <input type="hidden" id="accion" name="accion" value="buscarPatente">
            <div class="invalid-feedback">Por favor, ingrese un número de patente válido.</div>

            <br><br>
        </div>
        <input type="submit" class="btn btn-primary" value="Buscar" style="margin-top: 8px;">
    </form>
</div>
<script src="Assets/js/4.val_buscarAuto.js"></script>
<?php
include_once "Estructura/Footer.php";
?>