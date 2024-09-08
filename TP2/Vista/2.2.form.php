<?php
include_once "Estructura/Header.php"
?>
<!-- Ejercicio 2
            Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana. Enviar los datos del formulario por el método Get a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana. -->
<h1>Ejercicio 2.2</h1>
<form action="Action/Ejercicio2/2.action2.php" method="GET" onsubmit="return validar();">
    <div class="mb-3 mx-auto" style="width: 300px">
        <label for="lunes" class="form-label">Lunes</label>
        <input type="number" id="lunes" name="lunes" class="form-control">
        <div class="invalid-feedback">Ingrese un valor numérico entre 0 y 24.</div>
    </div>

    <div class="mb-3 mx-auto" style="width: 300px">
        <label for="martes" class="form-label">Martes</label>
        <input type="number" id="martes" name="martes" class="form-control">
        <div class="invalid-feedback">Ingrese un valor numérico entre 0 y 24.</div>
    </div>

    <div class="mb-3 mx-auto" style="width: 300px">
        <label for="miercoles" class="form-label">Miércoles</label>
        <input type="number" id="miercoles" name="miercoles" class="form-control">
        <div class="invalid-feedback">Ingrese un valor numérico entre 0 y 24.</div>
    </div>

    <div class="mb-3 mx-auto" style="width: 300px">
        <label for="jueves" class="form-label">Jueves</label>
        <input type="number" id="jueves" name="jueves" class="form-control">
        <div class="invalid-feedback">Ingrese un valor numérico entre 0 y 24.</div>
    </div>

    <div class="mb-3 mx-auto" style="width: 300px">
        <label for="viernes" class="form-label">Viernes</label>
        <input type="number" id="viernes" name="viernes" class="form-control">
        <div class="invalid-feedback">Ingrese un valor numérico entre 0 y 24.</div>
    </div>

    <input type="submit" class="btn btn-primary" value="Enviar">
</form>
<script src="Assets/js/Ejercicio2/2.numeroDiasDos.js"></script>

<?php
include_once "Estructura/Footer.php"
?>