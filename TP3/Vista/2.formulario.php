<?php
include_once "Estructura/Header.php";
?>
<!-- Ejercicio 2 – 
        Crear un formulario que permita subir un archivo. 
        
        En el servidor se deberá controlar que el tipo esperado sea txt (texto plano), 
        
        si es correcto deberá abrir el archivo 
        
        y mostrar su contenido en un textarea. -->

<h1>Subir Un Archivo .txt</h1>
<div>
    <form action="Action/2.subirArchivoTxt.php" method="POST" enctype="multipart/form-data" onsubmit="return validar();" novalidate>
        <div class="mb-3">
            <label for="miArchivo" class="form-label">Ingrese el archivo:</label>
            <input type="file" name="miArchivo" id="miArchivo" class="form-control">
            <div class="invalid-feedback">Por favor, seleccione un archivo .txt.</div>
        </div>
        <input type="submit" value="Subir Archivo" class="btn btn-primary">
    </form>
    <br>
</div>
<script src="Assets/js/2.archivoTx.js"></script>
<?php
include_once "Estructura/Footer.php";
?>