<?php
include_once "../../Utils/funciones.php";
include_once "../../Control/Archivo.php";

$dato = data_submitted();
$archivo = new Archivo();
$resultado = $archivo->subirArchivo($dato);
$mensaje = $archivo->mensajeResultado($resultado);

$nombreArchivo = $dato['miArchivo']['name']; // Obtener el nombre del archivo subido
$rutaArchivo = $archivo->getDir() . $nombreArchivo; // Ruta completa del archivo subido
?>

<html>

<head>
    <Title>Archivo Subido</Title>
</head>

<body>
    <h1>Resultado:</h1>
    <p>
        <?php
        echo $mensaje;
        ?>
    </p>

    <?php
    if ($resultado == 1) {
        echo '<p><a href="' . $rutaArchivo . '" target="_blank">Haz clic aquí para descargar el archivo</a></p>';
    }
    ?>
</body>

</html>

<!-- 
    Sin target="_blank": El enlace abrirá la página en la misma pestaña, reemplazando la página actual.

    Con target="_blank": El enlace abrirá la página en una nueva pestaña o ventana, manteniendo la página actual abierta.

    ¿Cuándo usarlo?
    Se utiliza cuando quieres que el usuario mantenga la página actual abierta mientras explora otra página. Esto es común para enlaces externos, descargas de archivos, o cualquier situación donde no quieras que el usuario pierda su lugar en la página original. -->