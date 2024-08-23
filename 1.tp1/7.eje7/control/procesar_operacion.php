<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la Operación</title>
</head>
<body>
    <h1>Resultado de la Información</h1>

    <?php
    if (isset($_POST['numero1'], $_POST['numero2'], $_POST['operacion'])) {
        $numero1 = floatval($_POST['numero1']);
        $numero2 = floatval($_POST['numero2']);
        $operacion = $_POST['operacion'];
        $resultado = 0;
        $operacionTexto = '';

        switch ($operacion) {
            case 'suma':
                $resultado = $numero1 + $numero2;
                $operacionTexto = 'SUMA';
                break;
            case 'resta':
                $resultado = $numero1 - $numero2;
                $operacionTexto = 'RESTA';
                break;
            case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                $operacionTexto = 'MULTIPLICACIÓN';
                break;
            default:
                echo "Operación no válida.";
                exit;
        }

        echo "Operación seleccionada: $operacionTexto<br>";
        echo "Número 1: $numero1<br>";
        echo "Número 2: $numero2<br>";
        echo "Resultado: $resultado<br>";
    } else {
        echo "No se recibieron todos los datos.<br>";
    }
    ?>

    <a href="../vista/formulario.php">Volver al formulario</a>
</body>
</html>
