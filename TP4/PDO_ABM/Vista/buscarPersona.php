<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar Persona</title>
        <link rel="stylesheet" href="styles.css">
        <script src="validaciones.js"></script>
    </head>
    <body>
        <h1>Buscar Persona</h1>
        <form action="Action/accionBuscarPersona.php" method="POST" onsubmit="return validarFormulario()">
            <label for="NroDni ">Numero de Documento:</label>
            <input type="text" id="NroDni" name="NroDni">
            <input type="submit" value="Buscar">
        </form>
    </body>
</html>
