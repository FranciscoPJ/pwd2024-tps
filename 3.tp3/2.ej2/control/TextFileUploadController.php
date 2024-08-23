<?php

class SubirArchivoTextoController
{
    private $directorioDestino;

    public function __construct()
    {
        // directorio de lugar a almacenar
        $this->directorioDestino = __DIR__ . '/txtFiles/'; // ruta absoluta
    }

    public function procesarArchivo($archivo)
    {
        $nombreArchivo = $archivo['name'];
        $resultado = -1; // bandera para manejar un solo retorno, -1 si es caso de error

        // verificacion tipo del archivo (.txt)
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        if (strtolower($extension) === 'txt') {

            // archivo al directorio de destino
            $rutaDestino = $this->directorioDestino . $nombreArchivo;

            if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
                $resultado = $nombreArchivo; // da nombre artchivo
            } else {
                $resultado = -1;
            }
        }

        return $resultado;
    }
}