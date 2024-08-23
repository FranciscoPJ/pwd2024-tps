<html>
<head>
    <title>Procesar Datos</title>
</head>
<body>
    <h1>Resultado de la Información</h1>

    <?php
    if (isset($_GET['nombre'], $_GET['apellido'], $_GET['edad'], $_GET['estudios'], $_GET['sexo'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];
        $sexo = $_GET['sexo'];
        $estudios = $_GET['estudios'];
        
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
    } else {
        echo "No se recibieron todos los datos.<br>";
    }
    ?>

    <br><br>
    <a href="../vista/formulario.php">Volver al formulario</a>
</body>
</html>
