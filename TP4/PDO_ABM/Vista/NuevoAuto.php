<?php
include_once "Estructura/Header.php";
?>


<html>

<head>
    <title>Nueva Vehículo</title>
</head>

<body align="center">
    <h2>7-Registrar Nuevo Vehiculo</h2>
<div class="d-flex justify-content-center align-items-center">
    <form action="Action/accionNuevoAuto.php" method="POST"  style="margin-block:5%">
        <h3>Datos del Vehículo</h3>
        <div class="form-group">
        <label for="Patente">Patente:</label><br>
        <input type="text" id="Patente" name="Patente" class="form-control"><br><br>
        </div>
        <div class="form-group">
        <label for="Marca">Marca:</label><br>
        <input type="text" id="Marca" name="Marca" class="form-control"><br><br>
        </div>
        <div class="form-group">
        <label for="Modelo">Modelo:</label><br>
        <input type="text" id="Modelo" name="Modelo" class="form-control"><br><br>
        </div>
        <div class="form-group">
        <label for="DniDuenio">DNI del Duenio:</label><br>
        <input type="text" id="DniDuenio" name="DniDuenio" class="form-control"><br><br>
        </div>
        <div class="form-group">
        <input type="hidden" id="accion" name="accion" value="nuevo" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    </div>
<?php
include_once "Estructura/Footer.php";
?>