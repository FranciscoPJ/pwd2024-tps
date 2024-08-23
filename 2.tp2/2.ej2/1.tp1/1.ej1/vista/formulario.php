<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Número</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validar() {
            var numero = $('#numero').val();
            if ($.isNumeric(numero)) {
                alert("Numero Enviado");
                return true;
            } else {
                alert("Por favor, ingrese un número válido.");
                return false;
            }
        }
    </script>
</head>
<body>
    <h1>Ingrese un número</h1>
    <form action="action/actionej1.php" method="get" onSubmit="return validar();">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
