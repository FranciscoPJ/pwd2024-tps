<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $urlDelArchivo = 'action.php';

    if (isset($_FILES['archivo'])) {
        require_once '../../control/TextFileUploadController.php'; // Incluye la clase del controlador

        $subirArchivoTexto = new SubirArchivoTextoController();
        $nombreArchivoSubido = $subirArchivoTexto->procesarArchivo($_FILES['archivo']);

        if ($nombreArchivoSubido) {
            $urlDelArchivo .= "?archivo=$nombreArchivoSubido";
        } else {
            $urlDelArchivo .= "?error=Ocurrió un error inesperado al subir el archivo.";
        }
    } else {
        $urlDelArchivo .= "?error=No se ha seleccionado ningún archivo.";
    }
    header("Location: $urlDelArchivo");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado Texto Subido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Resultado Texto Subido</h1>
        <?php
        $msj = "";
        if (isset($_GET['archivo'])) {
            $nombreArchivo = $_GET['archivo'];
            $rutaArchivo = '../../control/txtFiles/' . $nombreArchivo;

            if (file_exists($rutaArchivo)) {
                $contenidoArchivo = file_get_contents($rutaArchivo);
                $msj = "<p>El archivo '$nombreArchivo' se ha subido correctamente.</p>";
                $msj .= "<h4>Contenido del Archivo:</h4>";
                $msj .= "<textarea class='form-control' rows='10'>$contenidoArchivo</textarea>";
            } else {
                $msj = "<div class='alert alert-danger'>El archivo '$nombreArchivo' no existe.</div>";
            }
        } elseif (isset($_GET['error'])) {
            $mensajeError = $_GET['error'];
            $msj = "<div class='alert alert-danger'>$mensajeError</div>";
        } else {
            $msj = "<p>No se ha seleccionado ningún archivo.</p>";
        }
        echo $msj;
        ?>
        <br>
        <a href="../subirTxt.php" class="btn btn-primary">Volver</a>
    </div>
</body>

</html>