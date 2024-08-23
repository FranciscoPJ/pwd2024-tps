<html>
    
    <head>
        <title>Horas de Cursada - Programación Web Dinámica</title>
    </head>

    <body>
        <h1>Ingrese las horas de cursada por cada día</h1>
        <form action="../control/procesar_horas.php" method="get">
            <label for="lunes">Lunes:</label>
            <input type="number" id="lunes" name="lunes" min="0" required><br><br>

            <label for="martes">Martes:</label>
            <input type="number" id="martes" name="martes" min="0" required><br><br>

            <label for="miércoles">Miércoles:</label>
            <input type="number" id="miércoles" name="miércoles" min="0" required><br><br>

            <label for="jueves">Jueves:</label>
            <input type="number" id="jueves" name="jueves" min="0" required><br><br>

            <label for="viernes">Viernes:</label>
            <input type="number" id="viernes" name="viernes" min="0" required><br><br>

            <label for="sábado">Sábado:</label>
            <input type="number" id="sábado" name="sábado" min="0" required><br><br>

            <label for="domingo">Domingo:</label>
            <input type="number" id="domingo" name="domingo" min="0" required><br><br>

            <input type="submit" value="Enviar">
        </form>
    </body>

</html>
