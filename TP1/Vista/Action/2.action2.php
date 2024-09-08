<?php
include_once "../../Control/Numero.php";
include_once "../../Utils/funciones.php";

$arrayNumero = darDatosSubmitted();
print_r($arrayNumero);
$numero = new Numero();
$mensaje = $numero->contarNumeros($arrayNumero);
?>

<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <?php
        echo "<div>La cantidad de horas que cursan por semana son " . $mensaje . " horas.</div>";
        ?>
    </body>
</html>