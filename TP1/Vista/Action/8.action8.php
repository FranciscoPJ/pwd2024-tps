<?php
include_once "../../Control/Calculadora.php";
include_once "../../Utils/funciones.php";

$arrayDatos= darDatosSubmitted();
$calculadora = new Calculadora();
$precio = $calculadora->esEstudiante($arrayDatos);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
    </head>
    <body>
        <?php
        echo "<p>El valor de su entrada es: $" . $precio . "</p>";
        ?>
        <a href="../8.form.php">volver</a>
    </body>
</html>