<html>
<head>
    <title>Formulario de Datos Personales</title>
    <style>
        h1 {
            margin-left: 360px;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
        }
        input[type="radio"], input[type="checkbox"] {
            margin-top: 5px;
        }
        input[type="submit"] {
            margin-top: 15px;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <h1>Formulario de Datos Personales</h1>
    <form action="action/actionej6.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        
        <label>Nivel de estudios:</label>
        <label for="no_estudios">No tiene estudios</label>
        <input type="radio" id="estudio" name="estudio" value="1" required>
        <label for="primarios">Estudios primarios</label>
        <input type="radio" id="estudio" name="estudio" value="2" required>
        <label for="secundarios">Estudios secundarios</label>
        <input type="radio" id="estudio" name="estudio" value="3" required>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>
        
        <label for="deportes">Deportes que practicas:</label>        
        <label for="futbol">Futbol</label>
        <input type="checkbox" id="deportes" name="deportes[]" value="Futbol">
        <label for="basket">Basket</label>
        <input type="checkbox" id="deportes" name="deportes[]" value="Basket">
        <label for="tennis">Tennis</label>
        <input type="checkbox" id="deportes" name="deportes[]" value="Tennis">
        <label for="voley">Voley</label>
        <input type="checkbox" id="deportes" name="deportes[]" value="Voley">
        
        <br><input type="submit" value="Enviar">
    </form>
</body>
</html>
