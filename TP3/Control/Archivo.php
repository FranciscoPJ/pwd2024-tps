<?php

class Archivo
{
    private $dir;

    public function __construct()
    {

        $this->dir = "../../Archivos/";
    }

    public function getDir()
    {
        return $this->dir;
    }

    public function setDir($value)
    {
        $this->dir = $value;
    }

    /* ejercicio 1 */

    public function subirArchivo($array)
    {

        $respuesta = "";

        if ($array['miArchivo']['error'] <= 0) { // hay error?

            if ($array['miArchivo']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $array['miArchivo']['type'] == 'application/pdf' || $array['miArchivo']['type'] == 'application/msword') { // es .doc, .docx o .pdf?

                if ($array['miArchivo']['size'] <= (2 * pow(2, 20))) {

                    if (!copy($array['miArchivo']['tmp_name'], $this->getDir() . $array['miArchivo']['name'])) { // se copio bien?

                        $respuesta = 0; // no se copio

                    } else {

                        $respuesta = 1; //si, se copio el archivo bien

                    }
                } else {

                    $respuesta = 3; // no es menor de 2mb

                }
            } else {

                $respuesta = 2; // no es un pdf o word

            }
        } else {

            $respuesta = -1; //echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo temporal"; 

        }
        return $respuesta;
    }

    public function mensajeResultado($resultado)
    {
        $mensaje = "";

        if ($resultado == 0) {
            $mensaje = "ERROR: no se pudo cargar el archivo ";
        } elseif ($resultado == 1) {
            $mensaje = "El archivo se ha copiado con exito";
        } elseif ($resultado == 2) {
            $mensaje = "ERROR: no es un archivo de tipo pdf o word";
        } elseif ($resultado == 3) {
            $mensaje = "ERROR: no es un archivo menor igual a 2mb";
        } else {
            $mensaje = "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo temporal";
        }
        return $mensaje;
    }


    /* ejercicio 2 */

    public function subirArchivoTxt($array)
    {
        $respuesta = "";

        if ($array['miArchivo']['error'] <= 0) { // hay error en la subida del archivo?

            if ($array['miArchivo']['type'] == 'text/plain') { // es el archivo de tipo texto plano (MIME: text/plain)

                if (!copy($array['miArchivo']['tmp_name'], $this->getDir() . $array['miArchivo']['name'])) { // se copio bien el archivo al directorio destino?

                    $respuesta = 0; // No se copió correctamente

                } else {

                    $respuesta = 1; // Archivo copiado bein

                }
            } else {

                $respuesta = 2; // No es un archivo .txt

            }
        } else {

            $respuesta = -1; // Error al subir el archivo

        }
        return $respuesta;
    }

    public function mensajeResultadoTxt($resultado)
    {
        $mensaje = "";

        if ($resultado == 0) {
            $mensaje = "ERROR: no se pudo cargar el archivo ";
        } elseif ($resultado == 1) {
            $mensaje = "El archivo se ha copiado con exito";
        } elseif ($resultado == 2) {
            $mensaje = "ERROR: no es un archivo de tipo txt";
        } else {
            $mensaje = "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo temporal";
        }
        return $mensaje;
    }

    /* ejercicio 3 */
    public function subirImagen($arrayFile)
    {

        $respuesta = "";

        if ($arrayFile['miArchivo']['error'] <= 0) { // hay error?

            if ($arrayFile['miArchivo']['type'] == 'image/jpeg' || $arrayFile['miArchivo']['type'] == 'image/png' || $arrayFile['miArchivo']['type'] == 'image/gif') { // es .jpg, .jpeg, .png o .gif?

                if (!copy($arrayFile['miArchivo']['tmp_name'], $this->getDir() . $arrayFile['miArchivo']['name'])) { // se copio bien?

                    $respuesta = 0; // no se copio

                } else {

                    $respuesta = 1; //si, se copio el archivo bien

                }
            } else {

                $respuesta = 2; // no una imagen

            }
        } else {

            $respuesta = -1; //echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo temporal"; 

        }
        return $respuesta;
    }

    public function mensajeResultadoImg($resultado)
    {
        $mensaje = "";

        if ($resultado == 0) {
            $mensaje = "ERROR: no se pudo cargar el archivo ";
        } elseif ($resultado == 1) {
            $mensaje = "El archivo se ha copiado con exito";
        } elseif ($resultado == 2) {
            $mensaje = "ERROR: no es un archivo de tipo image";
        } else {
            $mensaje = "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo temporal";
        }
        return $mensaje;
    }
}
?>

<!-- tipo MIME: 
    .docx = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document  
    .doc = application/msword
    .pdf = application/pdf -->