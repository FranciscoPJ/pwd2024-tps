<?php
include_once "../../Control/Persona.php";
include_once "../../Utils/funciones.php";

$arrayDatos= darDatosSubmitted();
$datos = new Persona();
$mensaje = $datos->descripcionDatos($arrayDatos);
?>

<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <?php
        echo "<div>" . $mensaje . "</div>";
        ?>
    </body>
</html>