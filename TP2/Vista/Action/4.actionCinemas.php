<?php
include_once "../../Control/Pelicula.php";
include_once "../../Utils/funciones.php";

$datosPelicula = darDatosSubmitted();
$pelicula = new Pelicula();
$coldatosPelicula = $pelicula->infoPelicula($datosPelicula);
?>

<html>
    <head>
        <title>Pelicula</title>
        <link rel="stylesheet" href="../Assets/css/4.Action.css" type="text/css">
    </head>
    <body>
        <div>
            <h1>La pelicula introducida es</h1>
            <p><?php
                foreach($coldatosPelicula as $campo => $dato){
                    echo "<strong>" . $campo .":</strong> " . $dato . "<br>";
                }
            ?></p>
        </div>
    </body>
</html>