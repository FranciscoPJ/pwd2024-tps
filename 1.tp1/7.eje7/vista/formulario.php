<html>
<head>
    <title>Formulario de Operaciones Matemáticas</title>
    <style>
        form {
            width: 300px;
            margin: 0 auto;
        }
        label, select, input[type="text"], input[type="submit"] {
            display: block;
            margin-top: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Operaciones Matemáticas</h1>
    <form action="action/actionej7.php" method="post">
        <label for="numero1">Número 1:</label>
        <input type="text" id="numero1" name="numero1" required>
        
        <label for="numero2">Número 2:</label>
        <input type="text" id="numero2" name="numero2" required>
        
        <label for="operacion">Operación:</label>
        <select id="operacion" name="operacion" required>
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACIÓN</option>
        </select>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
