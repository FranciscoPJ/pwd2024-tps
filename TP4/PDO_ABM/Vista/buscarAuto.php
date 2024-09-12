<?php
include_once "Estructura/Header.php";
?>

    <h2>Formulario Auto</h2>
    <form action="Action/accionBuscarAuto.php" method="POST">

        <label for="patente">Nro Patente</label><br>
        <input type="text" id="Patente" name="Patente" placeholder="Ingrese un numero de patente" style="width: 300px;">
        <input type="hidden" id="accion" name="accion" value="buscarPatente">
        <br><br>
        <input type="submit" value="enviar">
    </form>

<?php
include_once "Estructura/Footer.php";
?>