<?php

include_once "../../control/Tiempo.php";
if ($_GET) {
    $lunes = intval($_GET['lunes']);
    $martes = intval($_GET['martes']);
    $miercoles = intval($_GET['miercoles']);
    $jueves = intval($_GET['jueves']);
    $viernes = intval($_GET['viernes']);



    $resultado = Tiempo::sumarHoras($lunes, $martes, $miercoles, $jueves, $viernes);
    $contenido = "La cantidad de horas semanales es de: $resultado";
} else {
    $contenido = "No se ingresó ningún dato.";
}
?>


<!DOCTYPE html>
<html>
    <head>
    <head>
        <title>
            Ver cantidad de horas semanales
        </title>
    </head>
    <body>
    <p>
        <?php
        echo $contenido;
        ?>
    </p>
    <a href="../formulario.php">volver</a>
    </div>


    </body>
</html>