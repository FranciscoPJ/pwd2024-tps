<?php
class FileUploadController
{
    private $directorioDestino;

    public function __construct()
    {
        // aca se almacenarán los archivos permitidos (.doc o .pdf)
        $this->directorioDestino = __DIR__ . '/files/'; // ruta
    }

    public function procesarArchivo($archivo)
    {
        $nombreArchivo = $archivo['name'];
        $resultado = false; // bandera

        // verificar el tipo del archivo
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        if (strtolower($extension) === 'doc' || strtolower($extension) === 'pdf') {
            // mover archivo al directorio del destino
            $rutaDestino = $this->directorioDestino . $nombreArchivo;

            if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
                $resultado = $nombreArchivo; // para dar nombre al archivo subido exitosamentew
            }
        }

        return $resultado;
    }
}
