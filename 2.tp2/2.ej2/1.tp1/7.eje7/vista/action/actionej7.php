<?php
    include_once "../../control/calculadora.php";

    $caladora = new calculadora();

    if ($_POST) {
        $numero1 = floatval($_POST['numero1']);
        $numero2 = floatval($_POST['numero2']);
        $operacion = $_POST['operacion'];
        $resultado = 0;
        $operacionTexto = '';

        switch ($operacion) {
            case 'suma':
                $resultado = $caladora->suma($numero1, $numero2);
                $operacionTexto = 'SUMA';
                break;
            case 'resta':
                $resultado = $caladora->resta($numero1, $numero2);
                $operacionTexto = 'RESTA';
                break;
            case 'multiplicacion':
                $resultado = $caladora->multiplicacion($numero1, $numero2);
                $operacionTexto = 'MULTIPLICACIÓN';
                break;
            default:
                echo "Operación no válida.";
                exit;
        }
        
    } else {
        echo "No se recibieron todos los datos.<br>";
    }
?>





<html>
<head>
    <title>Resultado de la Operación</title>
</head>
<body>
    <h1>Resultado de la Información</h1>
    <?php
        echo "Operación seleccionada: $operacionTexto<br>";
        echo "Número 1: $numero1<br>";
        echo "Número 2: $numero2<br>";
        echo "Resultado: $resultado<br>";
    ?>

    <a href="../formulario.php">Volver al formulario</a>
</body>
</html>
