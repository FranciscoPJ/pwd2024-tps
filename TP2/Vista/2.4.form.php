<?php
include_once "Estructura/Header.php"
?>
<!-- Ejercicio 4 
            Modificar el formulario del ejercicio anterior para que usando la edad solicitada, 

            enviar esos datos a otra página en donde se muestren mensajes distintos dependiendo.
            
            si la persona es mayor de edad o no; (si la edad es mayor o igual a 18). Enviar los datos usando el método GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes. -->

<h1>Ejercicio 2.4</h1>
<form action="Action/Ejercicio2/4.action4.php" method="GET" onsubmit="return validar();">
<div class="position-relative">
        <!-- nombre -->
        <div class="mb-3 mx-auto" style="width: 300px">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control">
            <div class="invalid-feedback">El Nombre solo debe contener letras y no debe estar vacío.</div>
        </div>
        <!-- apellido -->
        <div class="mb-3 mx-auto" style="width: 300px">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control">
            <div class="invalid-feedback">El Apellido solo debe contener letras y no debe estar vacío.</div>
        </div>
        <!-- edad -->
        <div class="mb-3 mx-auto" style="width: 300px">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" id="edad" name="edad" class="form-control">
            <div class="invalid-feedback">Complete una Edad válida.</div>
        </div>
        <!-- direccion -->
        <div class="mb-3 mx-auto" style="width: 300px">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" id="direccion" name="direccion" class="form-control">
            <div class="invalid-feedback">Complete la Dirección.</div>
        </div>
        <!-- submit -->
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
<script src="Assets/js/Ejercicio2/4.personaDatosCuatro.js"></script>
<?php
include_once "Estructura/Footer.php"
?>