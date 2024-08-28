<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Entradas - Cine Cinem@s</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validar() {
            let valid = true;
            let mensajes = [];

            // Validar edad
            let edad = $('#edad').val().trim(); 
            if (!$.isNumeric(edad) || edad <= 0) {
                mensajes.push("Por favor, ingrese una edad válida (número positivo).");
                valid = false;
            }

            // Validar estudiante
            let estudiante = $('input[name="estudiante"]:checked').val();
            if (!estudiante) {
                mensajes.push("Por favor, seleccione si eres estudiante o no.");
                valid = false;
            }

            // Mostrar mensajes si hay errores
            if (mensajes.length > 0) {
                $('#error-mensajes').html(mensajes.join("<br>")).show();
            } else {
                $('#error-mensajes').hide();
            }

            return valid;
        }
    </script>
    <style>
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Entradas</h1>
        <form action="action/actionej8.php" method="post" onsubmit="return validar();">
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" id="edad" name="edad" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">¿Eres estudiante?</label><br>
                <input type="radio" id="si" name="estudiante" value="si" required>
                <label for="si">Sí</label><br>
                <input type="radio" id="no" name="estudiante" value="no" required>
                <label for="no">No</label>
            </div>

            <div id="error-mensajes" class="text-danger mb-3" style="display:none;"></div>
            
            <button type="submit" class="btn btn-primary">Calcular</button>
            <button type="reset" class="btn btn-secondary">Limpiar</button>
        </form>
    </div>
</body>
</html>