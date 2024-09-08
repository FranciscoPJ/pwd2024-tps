<?php
include_once "../../Control/Pelicula.php";
include_once "../../Control/Archivo.php";
include_once "../../Utils/funciones.php";

$datosPelicula = data_submitted();
$pelicula = new Pelicula();
$archivo = new Archivo();

// recibir datos de la pelicula
$coldatosPelicula = $pelicula->infoPelicula($datosPelicula);

// subir imagen de la pelicula
$resultado = $archivo->subirImagen($datosPelicula);

//nombre de la imagen de la pelicula
$nombreImagen = $datosPelicula['miArchivo']['name'];

// Mensaje del resultado de la subida de la imagen
//$mensaje = $archivo->mensajeResultadoImg($resultado);
?>

<html>
<head>
    <title>Pelicula</title>
    <link rel="stylesheet" href="../Assets/css/3.Action.css" type="text/css">
</head>

<body>
    <div style="background-color: #c9febd;">
        <h1>La pelicula introducida es</h1>
        <!-- <p><?php //echo $mensaje ?></p> -->

        <!-- Mostrar informacion de la pelicula -->
        <p>
            <?php
            foreach ($coldatosPelicula as $campo => $dato) {
                echo "<strong>" . $campo . ":</strong> " . $dato . "<br>";
            }
            echo "<strong>Imagen de la película:</strong><br>";
            ?>
        </p>
        <!-- Mostrar la imagen subida de la pelicula -->
        <?php
            if ($resultado == 1) {
                echo "<img src='../../Archivos/" . $nombreImagen . "' alt='Imagen de la película' width='200px'>";
            }
        ?>
    </div>
</body>
</html>