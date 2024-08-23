<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos Personales</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validar() {
            var valid = true;
            var mensajes = [];

            // Función de validación genérica
            function validarCampo(id, mensaje, permitirNumeros) {
                var valor = $(id).val().trim();
                if (valor === "") {
                    mensajes.push(mensaje);
                    valid = false;
                } else if (!permitirNumeros && /\d/.test(valor)) {
                    mensajes.push("El campo " + $(id).prev('label').text() + " no debe contener números.");
                    valid = false;
                }
            }

            // Validar cada campo
            validarCampo("#nombre", "Por favor, ingrese su nombre.", false);
            validarCampo("#apellido", "Por favor, ingrese su apellido.", false);

            // Validar dirección con nombre de calle seguido de un número
            var direccion = $('#direccion').val().trim();
            var regexDireccion = /^[A-Za-z\s]+ \d+$/; // Nombre de calle seguido de número
            if (!regexDireccion.test(direccion)) {
                mensajes.push("La dirección debe contener un nombre de calle seguido de un número.");
                valid = false;
            }
            
            // Validar edad de manera especial
            var edad = $('#edad').val();
            if (!$.isNumeric(edad) || edad <= 0 || edad > 110) {
                mensajes.push("Por favor, ingrese una edad válida (número positivo y menor o igual a 110).");
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
            margin-left: 500px;
        }

        form {
            width: 300px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
        }
        input[type="submit"] {
            margin-top: 15px;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>Resolución</h1>
    <form action="action/actionej4.php" method="get" onsubmit="return validar();">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" required>
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" required>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" required>
        <input type="submit" class="boton" value="Enviar">
    </form>
</body>
</html>
