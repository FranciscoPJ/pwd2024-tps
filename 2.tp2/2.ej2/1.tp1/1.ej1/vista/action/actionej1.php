<?php
include_once "../../control/numero.php";

$numero = $_GET['numero'];

$datos = [
    "numero" => $numero
];

$obj = new Numero();
$mensaje = $obj->devolverSigno($datos);
?>

<html>

<head>
    <title>Ver Numero</title>
    <!--boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <h3>Ver Numero ingresado</h3>
    <p>
        <?php
        echo "el numero ingresado es " . $mensaje;
        ?>
    </p>
    <a href="../formulario.php">volver</a>
</body>

</html>