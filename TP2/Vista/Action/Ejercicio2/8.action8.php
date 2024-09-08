<?php
include_once "../../../Control/Calculadora.php";
include_once "../../../Utils/funciones.php";

$arrayDatos= darDatosSubmitted();
$calculadora = new Calculadora();
$precio = $calculadora->esEstudiante($arrayDatos);
?>

<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <?php
        echo "<p>El valor de su entrada es: $" . $precio . "</p>";
        ?>
        <a href="../../2.ejercicio2/8.form.php">volver</a>
    </body>
</html>