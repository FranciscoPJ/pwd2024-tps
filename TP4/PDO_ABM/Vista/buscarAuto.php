<?php
include_once "Estructura/Header.php";
?>

    <h2>4- Formulario Auto</h2>
    <div class="d-flex justify-content-center align-items-center">
    <form action="Action/accionBuscarAuto.php" method="POST">
<div class="form-group">
<label for="patente">Nro Patente</label><br>
<input  class="form-control" type="text" id="Patente" name="Patente" placeholder="Ingrese un numero de patente" style="width: 300px;">
</div>
        <input type="hidden" id="accion" name="accion" value="buscarPatente">
        <br><br>
        <input type="submit" value="enviar" class="btn btn-primary">
    </form>
    </div>
<?php
include_once "Estructura/Footer.php";
?>