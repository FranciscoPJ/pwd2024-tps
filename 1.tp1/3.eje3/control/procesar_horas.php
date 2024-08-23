</html>
    <head>
        <title>Procesar Datos</title>
    </head>
    <body>
        <h1>Procesar Datos</h1>

        <?php
        if ($_POST) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $direccion = $_POST['direccion'];

            echo "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.";
        } else {
            echo "No se recibieron datos.";
        }
        ?>

        <br><br>
        <a href="../vista/formulario.php">Volver al formulario</a>
    </body>
</html>
