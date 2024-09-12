<html>
<head>
    <title>Nueva Persona y Vehículo</title>
</head>
<body align="center">
    <h2>Registrar Nueva Persona y Vehículo</h2>
    
    <form action="Action/accionNuevoAuto.php" method="POST">
        <h3>Datos de la Persona</h3>
        <label for="NroDni">Número de DNI:</label><br>
        <input type="text" id="NroDni" name="NroDni"><br><br>

        <label for="Apellido">Apellido:</label><br>
        <input type="text" id="Apellido" name="Apellido"><br><br>

        <label for="Nombre">Nombre:</label><br>
        <input type="text" id="Nombre" name="Nombre"><br><br>

        <label for="fechaNac">Fecha de Nacimiento:</label><br>
        <input type="text" id="fechaNac" name="fechaNac" placeholder="anio-mes-dia"><br><br>

        <label for="Telefono">Teléfono:</label><br>
        <input type="tel" id="Telefono" name="Telefono"><br><br>

        <label for="Domicilio">Domicilio:</label><br>
        <input type="text" id="Domicilio" name="Domicilio"><br><br>

        <h3>Datos del Vehículo</h3>
        <label for="Patente">Patente:</label><br>
        <input type="text" id="Patente" name="Patente"><br><br>

        <label for="Marca">Marca:</label><br>
        <input type="text" id="Marca" name="Marca"><br><br>

        <label for="Modelo">Modelo:</label><br>
        <input type="text" id="Modelo" name="Modelo"><br><br>

        <input type="hidden" id="accion" name="accion" value="nuevo">
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
