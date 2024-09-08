<?php
include_once "Estructura/Header.php"
?>
<!-- Ejercicio 6 
        Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página que procesa el formulario la cantidad de deportes que practica.-->

<h1>Ejercicio 2.6</h1>
<form action="Action/Ejercicio2/6.action6.php" method="GET" onsubmit="return validar();">
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

        <!-- Nivel de Estudios -->
        <div class="mb-3">
            <div id="estudio-group" class="form-group text-center">
                <label>Nivel de Estudios:</label><br>
                <div class="d-flex justify-content-center">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" id="estudio" name="estudio" value="1">
                        <label class="form-check-label" for="estudio">No Tiene Estudios</label>
                    </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" id="estudio" name="estudio" value="2">
                        <label class="form-check-label" for="estudio">Estudios Primarios</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="estudio" name="estudio" value="3">
                        <label class="form-check-label" for="estudio">Estudios Secundarios</label>
                    </div>
                </div>
                <div class="invalid-feedback">
                    Seleccione un Nivel de Estudios.
                </div>
            </div>
        </div>

        <!-- Sexo -->
        <div class="mb-3 mx-auto" style="width: 300px">
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" class="form-select">
                <option value=""></option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
            <div class="invalid-feedback">Seleccione un Sexo.</div>
        </div>


        <!-- Deportes -->
        <div class="mb-3">
            <label for="deportes">Deportes que Practicas:</label><br>

            <div class="form-check">
                <input type="checkbox" id="futbol" name="deportes[]" value="Futbol">
                <label for="futbol" class="form-check-label ">Futbol</label>
            </div>

            <div class="form-check">
                <input type="checkbox" id="basket" name="deportes[]" value="Basket">
                <label for="basket" class="form-check-label">Basket</label>
            </div>

            <div class="form-check">
                <input type="checkbox" id="tennis" name="deportes[]" value="Tennis">
                <label for="tennis" class="form-check-label">Tennis</label>
            </div>

            <div class="form-check">
                <input type="checkbox" id="voley" name="deportes[]" value="Voley">
                <label for="voley" class="form-check-label">Voley</label>
            </div>

        </div>
        <div class="invalid-feedback">
            Seleccione al menos un Deporte.
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
<script src="Assets/js/Ejercicio2/6.personaDatos.js"></script>
<?php
include_once "Estructura/Footer.php"
?>