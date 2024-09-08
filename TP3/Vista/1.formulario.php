<?php
include_once "Estructura/Header.php";
?>
<!-- Ejercicio 1 – 
        Crear un formulario HTML que permita subir un archivo. 
        
        En el servidor se deberá controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf  (application/msword o application/pdf)
        
        y además el tamaño máximo permitido es de 2mb. 
        
        En caso que se cumplan las condiciones mostrar un link al archivo cargado, en caso contrario mostrar un mensaje indicando el problema. 
        
        tipos de MIMO: https://developer.mozilla.org/es/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types
        -->

<h1>Subir Un Archivo .pdf o .doc</h1>
<div>
    <form action="Action/1.subirArchivo.php" method="POST" enctype="multipart/form-data" onsubmit="return validar();" novalidate>
        <div class="mb-3">
            <label for="miArchivo" class="form-label">Ingrese el archivo:</label>
            <input type="file" name="miArchivo" id="miArchivo" class="form-control">
            <div class="invalid-feedback">Por favor, seleccione un archivo .pdf o .doc.</div>
        </div>
        <input type="submit" value="Subir Archivo" class="btn btn-primary">
    </form>
    <br>
</div>
<script src="Assets/js/1.ArchivoPdfW.js"></script>
<?php
include_once "Estructura/Footer.php";
?>