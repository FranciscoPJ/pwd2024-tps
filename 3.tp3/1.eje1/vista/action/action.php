<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $urlDelArchivo = '../resultado.php';

    if (isset($_FILES['archivo'])) {
        require_once '../../control/FileUploadController.php'; // incluye la clase del controlador

        $subirArchivo = new FileUploadController();
        $nombreArchivoSubido = $subirArchivo->procesarArchivo($_FILES['archivo']);

        if ($nombreArchivoSubido) {
            $urlDelArchivo .= "?archivo=$nombreArchivoSubido";
        } else {
            $urlDelArchivo .= "?error=Ocurrió un error inesperado al subir el archivo.";
        }
    } else {
        $urlDelArchivo .= "?error=No se ha seleccionado ningún archivo.";
    }

    // redirigir final
    header("Location: $urlDelArchivo");
    exit;
}
