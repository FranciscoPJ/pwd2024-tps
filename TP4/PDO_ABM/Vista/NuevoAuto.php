<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Vehículo</title>
</head>

<body align="center">
    <header>
        <?php
        include_once "Estructura/Header.php";
        ?>
    </header>
    <main>

        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">

            <form action="Action/accionNuevoAuto.php" method="POST" onsubmit=" return validar()">
                <h2>Registrar Nuevo Vehiculo</h2>

                <h3>Datos del Vehículo</h3>

                <div class="form-group">

                    <label for="Patente" class="form-label">Patente:</label><br>
                    <input type="text" id="Patente" name="Patente" class="form-control"><br><br>

                    <div class="invalid-feedback">Por favor, ingrese una patente válida.</div>

                </div>

                <div class="form-group">

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
                    <br><br>
                </div>

                <div class="form-group">

                    <label for="Modelo" class="form-label">Modelo:</label><br>
                    <input type="text" id="Modelo" name="Modelo" class="form-control"><br><br>

                    <div class="invalid-feedback">Ingrese un año valido</div>

                </div>


                <div class="form-group">
                    <label for="DniDuenio" class="form-label">DNI del Duenio:</label><br>
                    <input type="text" id="DniDuenio" name="DniDuenio" class="form-control"><br><br>

                    <div class="invalid-feedback">Por favor, ingrese un DNI válido.</div>
                </div>

                <input type="hidden" id="accion" name="accion" value="nuevo">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>


    </main>
    <footer>
        <?php
        include_once "Estructura/Footer.php";
        ?>
    </footer>
</body>

<script src="Assets/js/7.val_nuevoAuto.js"></script>


</html>