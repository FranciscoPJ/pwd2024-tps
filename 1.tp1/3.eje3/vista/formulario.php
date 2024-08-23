<html>

    <head>
        <title>Formulario de Datos Personales</title>
        <style>
            h1{
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
        <h1>Formulario de Datos Personales</h1>
        <form action="../control/procesar_horas.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>
            
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>
            
            <input type="submit" value="Enviar">
        </form>
    </body>

</html>
