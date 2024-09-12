<?php
include_once "Estructura/Header.php";
?>


<html>

<head>
    <title>Nueva Vehículo</title>
</head>

<body align="center">
    <h2>Registrar Nuevo Vehiculo</h2>

    <form action="Action/accionNuevoAuto.php" method="POST">
        <h3>Datos del Vehículo</h3>
        <label for="Patente">Patente:</label><br>
        <input type="text" id="Patente" name="Patente"><br><br>

        <label for="Marca">Marca:</label><br>
        <input type="text" id="Marca" name="Marca"><br><br>

        <label for="Modelo">Modelo:</label><br>
        <input type="text" id="Modelo" name="Modelo"><br><br>

        <label for="DniDuenio">DNI del Duenio:</label><br>
        <input type="text" id="DniDuenio" name="DniDuenio"><br><br>

        <input type="hidden" id="accion" name="accion" value="nuevo">
        <button type="submit">Registrar</button>
    </form>

<?php
include_once "Estructura/Footer.php";
?>