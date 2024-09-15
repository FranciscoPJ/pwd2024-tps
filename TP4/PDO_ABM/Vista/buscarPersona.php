<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar persona </title>


</head>

<body>
    <header>
        <?php
        include_once "Estructura/Header.php";
        ?>
    </header>
    <main>
        <div class="d-flex justify-content-center align-items-center" style="height: 80vh">
            <form action="Action/accionBuscarPersona.php" method="POST" onsubmit="return validar()" style="margin-block:auto">
                <h1>Buscar Persona</h1>

                <div class="form-group">
                    <label for="NroDni">Número de Documento:</label>
                    <input type="text" class="form-control" id="NroDni" name="NroDni">
                    <div class="invalid-feedback">Por favor, ingrese un número de documento válido.</div>
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
<script src="Assets/js/9.val_BuscarPersona9.js"></script>

</html>