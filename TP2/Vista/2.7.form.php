<?php
include_once "Estructura/Header.php"
?>
    <!-- Ejercicio 7 
            Crear una página con un formulario que contenga dos input de tipo text y un select. 
            
            En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. 
            
            En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación. -->

        <h1>Ejercicio 2.7 - Operaciones Matemáticas</h1>
        
        <form action="Action/Ejercicio2/7.action7.php" method="GET" onsubmit="return validar();">
            <div class="mb-3 mx-auto" style="width: 300px"> 
                <label for="numero1" class="form-label">Numero 1:</label>
                <input type="text" id="numero1" name="numero1" class="form-control">
                <div class="invalid-feedback">Escriba un Numero Valido.</div>
            </div>

            <div class="mb-3 mx-auto" style="width: 300px"> 
                <label for="numero2" class="form-label">Numero 2:</label>
                <input type="text" id="numero2" name="numero2" class="form-control">
                <div class="invalid-feedback">Escriba un Numero Valido.</div>
            </div>

            <div class="mb-3 mx-auto" style="width: 300px">
                <label for="operacion"  class="form-label">Operación:</label>
                <select id="operacion" name="operacion" class="form-select">
                    <option value=""></option>
                    <option value="suma">SUMA</option>
                    <option value="resta">RESTA</option>
                    <option value="multiplicacion">MULTIPLICACION</option>
                </select>
                <div class="invalid-feedback">Seleccione una Operacion.</div>
            </div>
            
            <input type="submit" class="btn btn-primary" value="Enviar">

        </form>
        <script src="Assets/js/Ejercicio2/7.calculadoraSiete.js"></script>
<?php
include_once "Estructura/Footer.php"
?>
