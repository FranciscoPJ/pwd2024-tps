<?php
include_once "Estructura/Header.php"
?>
    <!-- Ejercicio 8 
        La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente.
        
        Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. 
        
        Si es estudiante o menor de 12 años el precio es de $160, 
        
        si es estudiante y mayor o igual de 12 años el precio es de $180,
        
        en cualquier otro caso el precio es de $300. 
        
        Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón para limpiar el formulario y volver a consultar. -->

        <h1>Ejercicio 8 - Calculadora de Entradas</h1>
<form action="Action/Ejercicio2/8.action8.php" method="GET" onsubmit="return validar();">
    <div class="mb-3 mx-auto" style="width: 300px">
        <label for="edad" class="form-label">Edad:</label>
        <input type="number" id="edad" name="edad" class="form-control">
        <div class="invalid-feedback">Complete una Edad válida.</div>
    </div>
    <div class="mb-3 mx-auto" style="width: 300px">
        <label for="operacion" class="form-label">¿Eres estudiante?</label>
        <select id="operacion" name="operacion" class="form-select">
            <option value=""></option>
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select>
        <div class="invalid-feedback">Seleccione una opción.</div>
    </div>
    <input type="submit" class="btn btn-primary" value="Calcular">
    <input type="reset" class="btn btn-secondary" value="Limpiar">
</form>

        <script src="Assets/js/Ejercicio2/8.calcularEntradaOcho.js"></script>

<?php
include_once "Estructura/Footer.php"
?>
