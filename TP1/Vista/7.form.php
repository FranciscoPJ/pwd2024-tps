<?php
include_once "Estructura/Header.php";
?>
<!-- Ejercicio 7 
        Crear una página con un formulario que contenga dos input de tipo text y un select. 
        
        En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. 
        
        En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación. -->
        <h1>Ejercicio 7 - Operaciones Matematicas</h1>
        <form action="Action/7.action7.php" method="GET" onsubmit="return validar();">
            <br>
            <label for="numero1">Numero 1:</label>
            <input type="text" id="numero1" name="numero1">
            <br><br>
            <label for="numero2">Numero 2:</label>
            <input type="text" id="numero2" name="numero2">
            <br><br>
            <label for="operacion">Operación:</label>
            <select id="operacion" name="operacion">
                <option value=""></option>
                <option value="suma">SUMA</option>
                <option value="resta">RESTA</option>
                <option value="multiplicacion">MULTIPLICACION</option>
            </select>
            <br><br>
            <input type="submit" value="Enviar">

        </form>
        <!-- js -->
        <script type="text/javascript" src="Assets/js/7.calculadora.js"></script>
<?php
include_once "Estructura/Footer.php";
?>
