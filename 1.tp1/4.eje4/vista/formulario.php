<html>

    <head>
        <title>Formulario de Datos Personales</title>
        <style>
            h1{
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
        <form action="action/actionej4.php" method="get" class="columna">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" required>
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" required>
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" required>
            <input type="submit" class="boton" value="Enviar">
        </form>
    </body>

</html>
