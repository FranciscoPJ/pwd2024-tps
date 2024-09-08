<?php
include_once "Estructura/Header.php";
?>
    <!-- Ejercicio 4 
        Modificar el formulario del ejercicio anterior para que usando la edad solicitada, 

        enviar esos datos a otra página en donde se muestren mensajes distintos dependiendo.
            
        si la persona es mayor de edad o no; (si la edad es mayor o igual a 18). Enviar los datos usando el método GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes. -->

        <h1>Ejercicio 4</h1>
        <form action="Action/4.action4.php" method="GET" onsubmit="return validar();">
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
        <!-- js -->
        <script type="text/javascript" src="Assets/js/4.personaDatos.js"></script>
<?php
include_once "Estructura/Footer.php";
?>