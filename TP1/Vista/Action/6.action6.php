<?php
include_once "../../Control/Persona.php";
include_once "../../Utils/funciones.php";

$arrayDatos= darDatosSubmitted();
$datos = new Persona();
$mensaje1 = $datos->descripcionDatos($arrayDatos);
$mensaje2 = $datos->mayorDeEdad($arrayDatos);
$mensaje3 = $datos->darEstudio($arrayDatos);
$mensaje4 = $datos->cantDeportes($arrayDatos['deportes']);
?>

<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <?php
        echo "<p>" . $mensaje1 . "<br>" . $mensaje2 . "<br>" 
        . $mensaje3 . "<br>Mi sexo es " . $arrayDatos['sexo'] . 
        ".<br>" . $mensaje4 . "</p>";
        ?>
    </body>
</html>