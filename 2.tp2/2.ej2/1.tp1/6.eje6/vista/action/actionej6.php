<?php
include_once "../../control/persona.php";

$datos = $_GET;
$persona = new Persona();

if ($datos) {
    $nombre = $datos['nombre'];
    $apellido = $datos['apellido'];
    $edad = $datos['edad'];
    $estudio = $datos['estudio'];
    $sexo = $datos['sexo'];
    $deportes = isset($datos['deportes']) ? $datos['deportes'] : [];

    $persona->setNombre($nombre);
    $persona->setApellido($apellido);
    $persona->setEdad($edad);
    $persona->setEstudio($estudio);
    $persona->setSexo($sexo);
    $persona->setDeportes($deportes);

    if ($estudio == '1') {
        $nivel_estudios = "No tiene estudios";
    } elseif ($estudio == '2') {
        $nivel_estudios = "Estudios Primarios";
    } elseif ($estudio == '3') {
        $nivel_estudios = "Estudios Secundarios";
    }

    $mensaje1 = "Hola $nombre $apellido, tienes $edad años.<br>";
    $mensaje2 = "Nivel de Estudio: " . $nivel_estudios . ".<br>Sexo: " . $sexo . ".<br>";
    $mensaje3 = "Cantidad de Deportes: " . count($deportes);

} else {
    $mensaje = "No hay datos";
}
?>

<html>
<head>
    <title>Procesar Datos</title>
</head>
<body>
    <h1>Datos</h1>
    <?php   
        echo $mensaje1 . $mensaje2 . $mensaje3;
    ?>

    <br><br>
    <a href="../formulario.php">Volver al formulario</a>
</body>
</html>
