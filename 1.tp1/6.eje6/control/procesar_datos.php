<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesar Datos</title>
</head>
<body>
    <h1>Resultado de la Información</h1>

    <?php
    if (isset($_GET['nombre'], $_GET['apellido'], $_GET['edad'], $_GET['estudios'], $_GET['sexo'])) {
        $nombre = htmlspecialchars($_GET['nombre']);
        $apellido = htmlspecialchars($_GET['apellido']);
        $edad = htmlspecialchars($_GET['edad']);
        $sexo = htmlspecialchars($_GET['sexo']);
        $estudios = htmlspecialchars($_GET['estudios']);
        
        // Determinando el nivel de estudios
        $nivel_estudios = '';
        if ($estudios == '1') {
            $nivel_estudios = "No tiene estudios";
        } elseif ($estudios == '2') {
            $nivel_estudios = "Estudios primarios";
        } elseif ($estudios == '3') {
            $nivel_estudios = "Estudios secundarios";
        }

        echo "Hola $nombre $apellido, tienes $edad años.<br>";
        echo "Nivel de estudios: $nivel_estudios.<br>";
        echo "Sexo: $sexo.<br>";

        // Procesando los deportes seleccionados
        if (isset($_GET['deportes'])) {
            $deportes = $_GET['deportes'];
            $cantidadDeportes = count($deportes);
            echo "Practica $cantidadDeportes deporte(s):<br>";
            echo "<ul>";
            foreach ($deportes as $deporte) {
                echo "<li>" . htmlspecialchars($deporte) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "No practicas ningún deporte.<br>";
        }
    } else {
        echo "No se recibieron todos los datos.<br>";
    }
    ?>

    <a href="../vista/formulario.php">Volver al formulario</a>
</body>
</html>
