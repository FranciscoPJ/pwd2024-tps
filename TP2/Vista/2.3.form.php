<?php
include_once "Estructura/Header.php"
?>
    <!-- Ejercicio 3 
            Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida. Cambiar el método Post por Get y analizar las diferencias -->

        <h1>Ejercicio 2.3</h1>
        <form action="Action/Ejercicio2/3.action3.php" method="POST" onsubmit="return validar();">
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
        <script src="Assets/js/Ejercicio2/3.personaDatosTres.js"></script>
        <?php
include_once "Estructura/Footer.php"
?>