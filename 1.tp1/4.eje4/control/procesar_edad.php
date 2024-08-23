<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Edad</title>
</head>
<body>
    <h1>Verificación de Edad</h1>

    <?php
    if (isset($_GET['edad'])) {
        $edad = $_GET['edad'];
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];

        if ($edad >= 18) {
            echo "Hola $nombre $apellido, eres mayor de edad.";
        } else {
            echo "Hola $nombre $apellido, eres menor de edad.";
        }
    } else {
        echo "No se recibió la edad.";
    }
    ?>

    <br><br>
    <a href="../vista/formulario.php">Volver al formulario</a>
</body>
</html>
