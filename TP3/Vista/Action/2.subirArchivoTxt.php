<?php
include_once "../../Utils/funciones.php";
include_once "../../Control/Archivo.php";

$dato = data_submitted();
$archivo = new Archivo();
$resultado = $archivo->subirArchivoTxt($dato);
$mensaje = $archivo->mensajeResultadoTxt($resultado);

$contenidoArchivo = '';

if ($resultado == 1) { // Si el archivo se subió correctamente, leemos su contenido    
    $rutaArchivo = $archivo->getDir() . $dato['miArchivo']['name'];
    $contenidoArchivo = file_get_contents($rutaArchivo); // Leer el contenido del archivo
}
?>

<html>
    <head>
        <Title>Archivo Subido</Title>
    </head>
    <body>
    <h1>Resultado:</h1>
    <?php
    echo "<p>" . $mensaje . "</p>\n    ";
    if ($resultado == 1) {
        echo "<h2>Contenido del archivo:</h2>\n    ";
        echo '<textarea rows="20" cols="80">' . htmlspecialchars($contenidoArchivo) . '</textarea>';
    }
    ?>
    </body>
</html>

<!-- 
htmlspecialchars($contenidoArchivo): convierte caracteres especiales en entidades HTML para evitar problemas con el contenido del archivo que podría contener código HTML o caracteres especiales. -->