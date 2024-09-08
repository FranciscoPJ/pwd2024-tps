<?php
include_once "Estructura/Header.php";
?>
<!-- Ejercicio 6 
        Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página que procesa el formulario la cantidad de deportes que practica.-->
    <h1>Ejercicio 6</h1>
    <form action="Action/6.action6.php" method="GET" onsubmit="return validar();">
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
        <label>Nivel de Estudios:</label><br>
        <label for="no_estudios">No Tiene Estudios</label>
        <input type="radio" id="estudio" name="estudio" value="1"><br>
        <label for="primarios">Estudios Primarios</label>
        <input type="radio" id="estudio" name="estudio" value="2"><br>
        <label for="secundarios">Estudios Secundarios</label>
        <input type="radio" id="estudio" name="estudio" value="3"><br>
        <br>
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
            <option value=""></option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>
        <br><br>
        <label for="deportes">Deportes que Practicas:</label><br>
        <label for="futbol">Futbol</label>
        <input type="checkbox" id="deportes" name="deportes[]" value="Futbol"><br>
        <label for="basket">Basket</label>
        <input type="checkbox" id="deportes" name="deportes[]" value="Basket"><br>
        <label for="tennis">Tennis</label>
        <input type="checkbox" id="deportes" name="deportes[]" value="Tennis"><br>
        <label for="voley">Voley</label>
        <input type="checkbox" id="deportes" name="deportes[]" value="Voley">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <!-- js -->
    <script type="text/javascript" src="Assets/js/6.personaDatos.js"></script>
<?php
include_once "Estructura/Footer.php";
?>