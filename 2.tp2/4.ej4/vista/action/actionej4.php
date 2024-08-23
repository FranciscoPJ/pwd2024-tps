<?php
include_once "../../control/pelicula.php";
$cine = new Pelicula();

if($_POST){
    $titulo = $_POST['titulo'];
    $actores = $_POST['actores'];
    $director = $_POST['director'];
    $guion = $_POST['guion'];
    $produccion = $_POST['produccion'];
    $anio = $_POST['anio'];
    $nacionalidad = $_POST['nacionalidad'];
    $genero = $_POST['genero'];
    $duracion = $_POST['duracion'];
    $restriccionesEdad = $_POST['restricciones'];

    $datos = $cine->devolverDatos($titulo, $actores, $director, $guion, $produccion, $anio, $nacionalidad, $genero, $duracion, $restriccionesEdad);
} else {
    echo "No se enviaron Datos";
}
?>

<html>
    <head>
        <title>Pelicula Introducida</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="bg-success text-white rounded">
            <h1>La pelicula introducida es</h1>
            <p>
                <?php
                    if($datos != null){
                        foreach($datos as $clave => $valor){
                            echo $clave . ": " . $valor . "<br>";
                        }
                    } else {
                        echo "No hay datos";
                    }
                    
                ?>
            </p>
        </div>
    </body>
</html>