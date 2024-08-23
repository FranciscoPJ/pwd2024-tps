<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Entradas - Cine Cinem@s</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validar() {
            var valid = true;
            var mensajes = [];

            // Validar edad
            var edad = $('#edad').val().trim();
            if (!$.isNumeric(edad) || edad <= 0) {
                mensajes.push("Por favor, ingrese una edad válida (número positivo).");
                valid = false;
            }

            // Validar selección de estudiante
            if ($('#operacion').val() === "") {
                mensajes.push("Por favor, seleccione si eres estudiante o no.");
                valid = false;
            }

            // Mostrar mensajes si hay errores
            if (mensajes.length > 0) {
                alert(mensajes.join("\n"));
            }

            return valid;
        }
    </script>
    <style>
        h1{
            margin-left: 400px;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }
        label, input[type="number"], input[type="checkbox"], input[type="submit"], input[type="reset"] {
            display: block;
            margin-top: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Calculadora de Entradas</h1>
    <form action="action/actionej8.php" method="post" onsubmit="return validar();">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        
        <label for="operacion">¿Eres estudiante?</label>
        <select id="operacion" name="operacion" required>
            <option value="">Seleccione...</option>
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select>
        
        <input type="submit" value="Calcular">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>
