<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Número</title>
    <!--boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validar() {
            let numero = $('#numero').val().trim();
            let esNumero = false;
            if ($.isNumeric(numero)) {
                alert("Numero Enviado");
                esNumero = true;
            } else {
                alert("Por favor, ingrese un número válido.");
            
            }
            return esNumero;
        }
    </script>
</head>
<body>
    <h1>Ingrese un número</h1>
    <form action="action/actionej1.php" method="get" onsubmit="return validar();">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
