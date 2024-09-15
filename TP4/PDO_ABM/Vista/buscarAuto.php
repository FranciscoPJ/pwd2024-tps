<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar auto</title>
</head>

<body>
    <header>
        <?php
        include_once "Estructura/Header.php";
        ?>
    </header>
    <main>
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <form action="Action/accionBuscarAuto.php" method="POST" onsubmit="return validar()">
                <h2>Buscar Auto</h2>

                <div class="form-group">
                    <label for="patente">Nro Patente</label><br>
                    <input type="text" id="Patente" class="form-control" name="Patente" placeholder="Ingrese un numero de patente" style="width: 300px;">
                    <input type="hidden" id="accion" name="accion" value="buscarPatente">
                    <div class="invalid-feedback">Por favor, ingrese un número de patente válido.</div>

                    <br><br>
                </div>
                <input type="submit" class="btn btn-primary" value="Buscar" style="margin-top: 8px;">
            </form>
        </div>
    </main>
    <footer>
        <?php
        include_once "Estructura/Footer.php";
        ?>
    </footer>


</body>
<script src="Assets/js/4.val_buscarAuto.js"></script>

</html>