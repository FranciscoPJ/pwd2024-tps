<html>
<head>
    <title>Resultado del Cálculo</title>
</head>
<body>
    <h1>Resultado del Cálculo</h1>

    <?php
    if (isset($_POST['edad'])) {
        $edad = intval($_POST['edad']);
        $esEstudiante = isset($_POST['estudiante']);
        $precio = 0;

        if ($esEstudiante || $edad < 12) {
            $precio = 160;
        } elseif ($esEstudiante && $edad >= 12) {
            $precio = 180;
        } else {
            $precio = 300;
        }

        echo "Edad: $edad años<br>";
        echo "Estudiante: " . ($esEstudiante ? "Sí" : "No") . "<br>";
        echo "Precio de la entrada: $$precio<br>";
    } else {
        echo "No se recibieron todos los datos.<br>";
    }
    ?>

    <a href="../vista/formulario.php">Volver al formulario</a>
</body>
</html>
