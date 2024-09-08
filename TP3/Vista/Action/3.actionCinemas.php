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
</head>

<body>
    <div style="background-color: green;">
        <h1 style="color: blue;">La pelicula introducida es</h1>
        <!-- <p><?php //echo $mensaje ?></p> -->

        <!-- Mostrar informacion de la pelicula -->
        <p>
            <?php
            foreach ($coldatosPelicula as $campo => $dato) {
                echo "<strong>" . $campo . ":</strong> " . $dato . "<br>";
            }
            ?>
        </p>

        <!-- Mostrar la imagen subida de la pelicula -->
        <?php
        if ($resultado == 1) {
            echo "<p><strong>Imagen de la película:</strong></p>";
            echo "<img src='../../Archivos/" . $nombreImagen . "' alt='Imagen de la película' width='200px'>";
        }
        ?>
    </div>
</body>
</html>