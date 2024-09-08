<?php
include_once "Estructura/Header.php";
?>
    <!-- Ejercicio 8 
        La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente.
        
        Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. 
        
        Si es estudiante o menor de 12 años el precio es de $160, 
        
        si es estudiante y mayor o igual de 12 años el precio es de $180,
        
        en cualquier otro caso el precio es de $300. 
        
        Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón para limpiar el formulario y volver a consultar. -->        
        <h1>Ejercicio 8 - Calcular Entradas</h1>
        <form action="Action/8.action8.php" method="GET" onsubmit="return validar();">
            <br>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad">
            <br><br>
            ¿Eres estudiante?
            <select id="operacion" name="operacion">
                <option value=""></option>
                <option value="si">si</option>
                <option value="no">no</option>
            </select>
            <br><br>
            <input type="submit" value="Calcular">
            <input type="reset" value="Limpiar">
        </form>
        <!-- js -->
        <script type="text/javascript" src="Assets/js/8.calcularEntrada.js"></script>
<?php
include_once "Estructura/Footer.php";
?>