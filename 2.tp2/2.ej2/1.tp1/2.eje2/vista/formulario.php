<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas de Cursada</title>
    <!--boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validar() {
            let valid = true;
            let mensajes = [];

            $('input[type="number"]').each(function() {
                let valor = $(this).val();
                if (!$.isNumeric(valor) || valor < 0) {
                    mensajes.push("Por favor, ingrese un número válido y no negativo en " + $(this).prev('label').text());
                    valid = false;
                }
            });

            if (mensajes.length > 0) {
                alert(mensajes.join("\n"));
            }

            return valid;
        }
    </script>
</head>
<body>
    <h3>Ingrese las horas que cursa Prog. Dinamica cada dia</h3>
    <form action="action/actionej2.php" method="get" onsubmit="return validar();">
        <ul>
            <li>
                <label for="lunes">Lunes:</label>
                <input type="number" id="lunes" name="lunes">
            </li>
            <li>
                <label for="martes">Martes:</label>
                <input type="number" id="martes" name="martes">
            </li>
            <li>
                <label for="miercoles">Miércoles:</label>
                <input type="number" id="miercoles" name="miercoles">
            </li>
            <li>
                <label for="jueves">Jueves:</label>
                <input type="number" id="jueves" name="jueves">
            </li>
            <li>
                <label for="viernes">Viernes:</label>
                <input type="number" id="viernes" name="viernes">
            </li>
        </ul>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
