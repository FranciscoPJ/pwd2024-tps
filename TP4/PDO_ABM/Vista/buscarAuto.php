<?php
include_once "estructura/Header.php";
?>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Auto</title>
</head>

<body>

    <h2>Formulario Auto</h2>
    <form action="Action/accionBuscarAuto.php" method="POST">

        <label for="patente">Nro Patente</label><br>
        <input type="text" id="Patente" name="Patente" placeholder="Ingrese un numero de patente" style="width: 300px;">
        <input type="hidden" id="accion" name="accion" value="buscarPatente">
        <br><br>
        <input type="submit" value="enviar">
    </form>

</body>

</html>
<?php
include_once "estructura/Footer.php";
?>