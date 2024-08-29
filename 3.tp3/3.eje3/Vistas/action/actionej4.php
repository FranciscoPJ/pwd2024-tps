<?php
include_once "../../Control/pelicula.php";
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

    $archivo = $_FILES['imagen'];//archivo pasado a array
    $extension = strtolower(pathinfo($archivo['name'], PATHINFO_EXTENSION));//nombre del archivo(foto) y su extension
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];

    

    if ($archivo['error'] == UPLOAD_ERR_OK) {
        // Verificar si el archivo es una imagen
        $check = getimagesize($archivo['tmp_name']);
        if ($check !== false && in_array($extension, $allowed_extensions)) { //que sea imagen y q sea de extension permitida
            $imagenPath = $titulo . "." . $extension;
            $uploadPath = "imagen/" . $imagenPath; //direccion donde se va a guardar

            if (move_uploaded_file($archivo['tmp_name'], $uploadPath)) { //temporalmente 
                $datos = $cine->devolverDatos($titulo, $actores, $director, $guion, $produccion, $anio, $nacionalidad, $genero, $duracion, $restriccionesEdad, $imagenPath);
            } 
        } 
    } 

}
?>

<html>
    <head>
        <title>Pelicula Introducida</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="bg-success text-white rounded">
            <h1>La película introducida es</h1>
            <p>
                <?php
                    if (isset($datos) && $datos != null) {
                        foreach ($datos as $clave => $valor) {
                            if ($clave == "Imagen") {
                                echo "<img src='imagen/$valor' alt='Imagen de la película' style='max-width: 200px;'><br>";
                            } else {
                                echo $clave . ": " . $valor . "<br>";
                            }
                        }
                    } else {
                        echo "No hay datos";
                    }
                ?>
            </p>
        </div>
        <div class="mb-4">
                <?php
                    if (!empty($mensaje)) {
                        echo '<div class="alert alert-info">';
                        foreach ($mensaje as $msg) {
                            echo $msg . "<br>";
                        }
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </body>
</html>
