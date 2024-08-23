<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Archivo subido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Archivo subido</h1>
        <?php
        $msj = "";
        if (isset($_GET['archivo'])) {
            $nombreArchivo = $_GET['archivo'];
            //strtoupper
            $msj = "<p>El archivo '$nombreArchivo' se ha subido correctamente.</p>";
            $msj .= "<p>Podés acceder al archivo haciendo clic en el siguiente enlace:</p>";
            $msj .= "<a href='../control/files/$nombreArchivo'>$nombreArchivo</a>";
        } elseif (isset($_GET['error'])) {
            $mensajeError = $_GET['error'];
            $msj = "<div class='alert alert-danger'>$mensajeError</div>";
        } else {
            $msj = "<p>No se ha seleccionado ningún archivo.</p>";
        }
        echo $msj;
        ?>
        <br>
        <a href="subirArchivo.php" class="btn btn-primary">Volver</a>
    </div>
</body>

</html>