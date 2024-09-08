<?php
include_once "../../../Control/Numero.php";
$numero = $_GET['numero'];
$signo = new Numero();
$mensaje = $signo->darsigno($numero);
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