<?php
$usuarios = [
    ["usuario" => "admin", "clave" => "admin123"],
    ["usuario" => "usuario1", "clave" => "user1234"],
    ["usuario" => "invitado", "clave" => "invited2024"],
];

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$encontrado = false;

foreach ($usuarios as $usr) {
    if ($usr['usuario'] === $usuario && $usr['clave'] === $clave) {
        $encontrado = true;
        break;
    }
}

if ($encontrado) {
    echo "Bienvenido, $usuario!";
} else {
    echo "Error: Usuario o contraseña incorrectos.";
}
?>
