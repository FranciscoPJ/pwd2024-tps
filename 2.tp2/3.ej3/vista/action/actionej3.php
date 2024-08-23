<?php
include_once "../../control/verificaPass.php";

$usuarios = [
    ["usuario" => "admin", "clave" => "admin123"],
    ["usuario" => "usuario1", "clave" => "user1234"],
    ["usuario" => "invitado", "clave" => "invited2024"],
];

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sistema = new Sistema();
$sistema->setColUsarios($usuarios);
$encontrado = $sistema->verificarUsuario($usuario, $clave);

if ($encontrado) {
    $mensaje = "Bienvenido, $usuario!";
} else {
    $mensaje = "Error: Usuario o contraseña incorrectos.";
}
?>

<html>
    <head>
        <title>Usuario</title>
    </head>
    <body>
        <p>
            <?php
                echo $mensaje;
            ?>
        </p>
        <a href="../formulario.php">Volver</a>
    </body>
</html>