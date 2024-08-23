<html>
<head>
    <title>Calculadora de Entradas - Cine Cinem@s</title>
    <style>
        form {
            width: 300px;
            margin: 0 auto;
        }
        label, input[type="number"], input[type="checkbox"], input[type="submit"], input[type="reset"] {
            display: block;
            margin-top: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Calculadora de Entradas</h1>
    <form action="../control/procesar_entrada.php" method="post">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        
        <label for="estudiante">¿Eres estudiante?</label>
        <label for="si">si:</label>
        <input type="checkbox" id="estudiante" name="estudiante">
        <label for="si">no:</label>
        <input type="checkbox" id="noestudiante" name="noestudiante">
        
        <input type="submit" value="Calcular">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>
