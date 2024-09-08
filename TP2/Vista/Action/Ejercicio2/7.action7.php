<?php
include_once "../../../Control/Calculadora.php";
include_once "../../../Utils/funciones.php";

$arrayDatos= darDatosSubmitted();
$calculadora = new Calculadora();
$operacion = $calculadora->operacion($arrayDatos);
?>

<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <?php
        echo "<p>Operacion: " . $arrayDatos['operacion'] . "<br>Numero 1: " . $arrayDatos['numero1'] . "<br>Numero 2: " . $arrayDatos['numero2'] . "<br>Resultado: " . $operacion . "</p>";
        ?>
    </body>
</html>