<?php
include_once "Estructura/Header.php";
?>

<div class="d-flex justify-content-center align-items-center" style="height: 140vh;">

    <form action="Action/accionNuevoAuto.php" method="POST" onsubmit=" return validar()">
        <h2>Ejercicio 7: Registrar Nuevo Vehiculo</h2>

        <h3>Datos del Vehículo</h3><br>

        <!-- Patente -->
        <div class="form-group mb-3">

            <label for="Patente" class="form-label">Patente:</label><br>
            <input type="text" id="Patente" name="Patente" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese una patente válida.</div>

        </div>

        <!-- Marca -->
        <div class="form-group mb-3">

            <label for="Marca" class="form-label">Marca:</label><br>
            <select type="text" id="Marca" name="Marca" class="form-select">
                <option value=""> Seleccioná Marca</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Ford">Ford</option>
                <option value="Fiat">Fiat</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Audi">Audi</option>
                <option value="Renault">Renault</option>
            </select>
            <div class="invalid-feedback">No se seleccionó marca</div>

        </div>

        <!-- Modelo -->
        <div class="form-group mb-3">

            <label for="Modelo" class="form-label">Modelo:</label><br>
            <input type="text" id="Modelo" name="Modelo" class="form-control">
            <div class="invalid-feedback">Ingrese un año valido</div>

        </div>

        <!-- DNI Dueño -->
        <div class="form-group mb-3">

            <label for="DniDuenio" class="form-label">DNI del Dueño:</label><br>
            <input type="text" id="DniDuenio" name="DniDuenio" class="form-control">
            <div class="invalid-feedback">Por favor, ingrese un DNI válido.</div>

        </div><br>

        <!-- Boton Registrar -->
        <input type="hidden" id="accion" name="accion" value="nuevo">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>

<script src="Assets/js/7.val_nuevoAuto.js"></script>
<?php
include_once "Estructura/Footer.php";
?>