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
</head>
<body>
    <h1>Ver Numero ingresado</h1>
    <p>
        <?php
        echo "el numero ingresado es " . $mensaje;
        ?>
    </p>
    <a href="../formulario.php">volver</a>
</body>
</html>
