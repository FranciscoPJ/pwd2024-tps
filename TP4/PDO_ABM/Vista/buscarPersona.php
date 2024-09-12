<?php
include_once "Estructura/Header.php";
?>
        <h1>Buscar Persona</h1>
        <form action="Action/accionBuscarPersona.php" method="POST" onsubmit="return validarFormulario()">
            <label for="NroDni ">Numero de Documento:</label>
            <input type="text" id="NroDni" name="NroDni">
            <input type="submit" value="Buscar">
        </form>
<?php
include_once "Estructura/Footer.php";
?>