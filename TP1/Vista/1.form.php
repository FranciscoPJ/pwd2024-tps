<?php
include_once "Estructura/Header.php";
?>
<!-- Ejercicio 1 
    Confeccionar un formulario que solicite un número. 
    Al pulsar el botón de enviar debe llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior. -->
    <div class="card-body">
        <h1>Ejercicio 1</h1>
        <form action="Action/1.action1.php" method="GET" onsubmit="return validar();">
            <label for="numero">Ingrese un Numero:</label><br>
            <input type="number" id="numero" name="numero">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <!-- aca iria el js -->
    <script type="text/javascript" src="Assets/js/1.numero.js"></script>
<?php
include_once "Estructura/Footer.php";
?>