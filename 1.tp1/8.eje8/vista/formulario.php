<html>
<head>
    <title>Calculadora de Entradas - Cine Cinem@s</title>
    <style>
        h1{
            margin-left: 400px;
        }
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
    <form action="action/actionej8.php" method="post">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        
        ¿Eres estudiante?
        <select id="operacion" name="operacion" required>
            <option value="si">si</option>
            <option value="no">no</option>
        </select>
        
        <input type="submit" value="Calcular">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>
