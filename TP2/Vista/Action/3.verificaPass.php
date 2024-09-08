<?php
include_once "../../control/Sistema.php";
include_once "../../Utils/funciones.php";

$datos = darDatosSubmitted();
$sistema = new Sistema();
$encontrado = $sistema->verificarUsuario($datos);

if ($encontrado) {
    $mensaje = "Bienvenido!";
} else {
    $mensaje = "Error: Usuario o contraseña incorrectos.";
}
?>

<html>
    <head>
        <title>Usuario</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <p>
            <?php
                echo $mensaje;
            ?>
        </p>
        <a href="../3.formLogIn.php">Volver</a>
    </body>
</html>