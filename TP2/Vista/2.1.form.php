<?php
include_once "Estructura/Header.php"
?>
<!-- Ejercicio 1 
        Confeccionar un formulario que solicite un número. 
        Al pulsar el botón de enviar debe llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior. -->
<h1>Ejercicio 2.1</h1>
<form action="Action/Ejercicio2/1.action1.php" method="GET" onsubmit="return validar();">
    <div class="mb-3 mx-auto" style="width: 300px">
        <label for="numero" class="form-label">Ingrese un Número:</label>
        <input type="number" id="numero" name="numero" class="form-control">
        <div class="invalid-feedback">Por favor, ingrese un número válido.</div>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>
<script src="Assets/js/Ejercicio2/1.numero.js"></script>
<?php
include_once "Estructura/Footer.php"
?>