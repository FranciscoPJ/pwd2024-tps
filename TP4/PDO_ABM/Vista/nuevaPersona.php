<?php
include_once "estructura/Header.php";
?>



<html>

<head>
    <title>Nueva Persona</title>
</head>

<body>
    <h2>Registrar Nueva Persona</h2>

    <form action="Action/accionNuevaPersona.php" method="POST">
        <label for="NroDni">Número de DNI:</label><br>
        <input type="text" id="NroDni" name="NroDni"><br><br>

        <label for="Apellido">Apellido:</label><br>
        <input type="text" id="Apellido" name="Apellido"><br><br>

        <label for="Nombre">Nombre:</label><br>
        <input type="text" id="Nombre" name="Nombre"><br><br>

        <label for="fechaNac">Fecha de Nacimiento:</label><br>
        <!-- <input type="date" id="fechaNac" name="fechaNac"><br><br> (cambie el date por el text) -->
        <input type="text" id="fechaNac" name="fechaNac" placeholder="anio-mes-dia"><br><br>

        <label for="Telefono">Teléfono:</label><br>
        <input type="tel" id="Telefono" name="Telefono"><br><br>

        <label for="Domicilio">Domicilio:</label><br>
        <input type="text" id="Domicilio" name="Domicilio"><br><br>

        <input type="hidden" id="accion" name="accion" value="nuevo">
        <button type="submit">Registrar</button>
    </form>
</body>

</html>
<?php
include_once "estructura/Footer.php";
?>