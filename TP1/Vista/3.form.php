<?php
include_once "Estructura/Header.php";
?>
<!-- Ejercicio 3 
            Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida. Cambiar el método Post por Get y analizar las diferencias -->

<h1>Ejercicio 3</h1>
<form action="Action/3.action3.php" method="POST" onsubmit="return validar();">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre">
    <br>
    <label for="apellido">Apellido</label>
    <input type="text" id="apellido" name="apellido">
    <br>
    <label for="edad">Edad</label>
    <input type="number" id="edad" name="edad">
    <br>
    <label for="direccion">Direccion</label>
    <input type="text" id="direccion" name="direccion">
    <br><br>
    <input type="submit" value="Enviar">
</form>
<!-- aca iria el js -->
<script type="text/javascript" src="Assets/js/3.personaDatos.js"></script>
<?php
include_once "Estructura/Footer.php";
?>