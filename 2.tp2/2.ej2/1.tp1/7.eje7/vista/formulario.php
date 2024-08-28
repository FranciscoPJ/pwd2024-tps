<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Operaciones Matemáticas</title>
    
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validar() {
            let valid = true;
            let mensajes = [];

            // Validar campos numericos
            function validarNumero(id, mensaje) {
                let valor = $(id).val().trim();
                if (!$.isNumeric(valor)) {
                    mensajes.push(mensaje);
                    valid = false;
                }
            }

            // Validar campos de número
            validarNumero("#numero1", "Por favor, ingrese un número válido en Número 1.");
            validarNumero("#numero2", "Por favor, ingrese un número válido en Número 2.");

            // Validar operación seleccionada
            if ($('#operacion').val() === "") {
                mensajes.push("Por favor, seleccione una operación.");
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
        h1 {
            margin-left: 775px;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }
        label, select, input[type="text"], input[type="submit"] {
            display: block;
            margin-top: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Operaciones Matemáticas</h1>
    <form action="action/actionej7.php" method="post" onsubmit="return validar();">
        <label for="numero1">Número 1:</label>
        <input type="text" id="numero1" name="numero1" required>
        
        <label for="numero2">Número 2:</label>
        <input type="text" id="numero2" name="numero2" required>
        
        <label for="operacion">Operación:</label>
        <select id="operacion" name="operacion" required>
            <option value="">Seleccione una operación...</option>
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACIÓN</option>
        </select>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
