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

            // Validar edad de manera especial
            var edad = $('#edad').val();
            if (!$.isNumeric(edad) || edad <= 0 || edad > 110) {
                mensajes.push("Por favor, ingrese una edad válida (número positivo y menor o igual a 110).");
                valid = false;
            }

            // Validar nivel de estudios
            if (!$('input[name="estudio"]:checked').val()) {
                mensajes.push("Por favor, seleccione un nivel de estudios.");
                valid = false;
            }

            // Validar sexo
            if ($('#sexo').val() === "") {
                mensajes.push("Por favor, seleccione su sexo.");
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
            margin-left: 360px;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
        }
        input[type="radio"] {
            margin-top: 5px;
        }
        input[type="submit"] {
            margin-top: 15px;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>Formulario de Datos Personales</h1>
    <form action="action/actionej5.php" method="get" onsubmit="return validar();">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        
        <label>Nivel de estudios:</label>
        <label for="no_estudios">No tiene estudios</label>
        <input type="radio" id="no_estudios" name="estudio" value="1">
        <label for="primarios">Estudios primarios</label>
        <input type="radio" id="primarios" name="estudio" value="2">
        <label for="secundarios">Estudios secundarios</label>
        <input type="radio" id="secundarios" name="estudio" value="3">
        
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="">Seleccione...</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
