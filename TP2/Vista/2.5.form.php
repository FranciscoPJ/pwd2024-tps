<?php
include_once "Estructura/Header.php"
?>
<!-- Ejercicio 5 
            Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons”:
                
            se ingrese el nivel de estudio de la persona: 
            1-no tiene estudios, 
            2-estudios primarios, 
            3-estudios secundarios. 
            
            Agregar el componente que crea más apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además un mensaje que indique el tipo de estudios que posee y su sexo.-->

<h1>Ejercicio 2.5</h1>
<form action="Action/Ejercicio2/5.action5.php" method="GET" onsubmit="return validar();" class="needs-validation" novalidate>
    <!-- Nombre -->
    <div class="mb-3 mx-auto" style="width: 300px">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control">
        <div class="invalid-feedback">El Nombre no debe estar vacío y solo debe contener letras.</div>
    </div>

    <!-- Apellido -->
    <div class="mb-3 mx-auto" style="width: 300px">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" id="apellido" name="apellido" class="form-control">
        <div class="invalid-feedback">El Apellido no debe estar vacío y solo debe contener letras.</div>
    </div>

    <!-- Edad -->
    <div class="mb-3 mx-auto" style="width: 300px">
        <label for="edad" class="form-label">Edad</label>
        <input type="number" id="edad" name="edad" class="form-control">
        <div class="invalid-feedback">Complete una Edad válida (mayor a 0).</div>
    </div>

    <!-- Dirección -->
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
        <label for="sexo" class="form-label">Sexo:</label>
        <select id="sexo" name="sexo" class="form-select">
            <option value=""></option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>
        <div class="invalid-feedback">Seleccione un Sexo.</div>
    </div>

    <!-- Submit -->
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="Assets/js/Ejercicio2/5.personaDatos.js"></script>
<?php
include_once "Estructura/Footer.php"
?>