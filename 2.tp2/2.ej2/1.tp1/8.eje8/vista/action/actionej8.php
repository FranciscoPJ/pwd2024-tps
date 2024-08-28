<?php
include_once "../../control/cliente.php";

$cliente = new Cliente();

    if ($_POST) {
        $edad = intval($_POST['edad']);
        $estudiante = $_POST['estudiante'];
        $valor = $cliente->esEstudiante($edad, $estudiante);
        
    } else {
        echo "No se recibieron todos los datos.<br>";
    }
?>


<html>
<head>
    <title>Resultado del Cálculo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <h1>Resultado del Cálculo</h1>

    <?php
        echo "Edad: $edad años<br>";
        echo "Estudiante: " . $estudiante . "<br>";
        echo "Precio de la entrada: $$valor<br>";
    ?>

    <a href="../formulario.php">Volver al formulario</a>
</body>
</html>
