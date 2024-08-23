<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Película - Cinem@s</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#peliculaForm').on('submit', function() {
                var valido = true;

                // Validación del campo "Año"
                var anio = $('#anio').val();
                if (!/^\d{4}$/.test(anio)) {
                    alert('Por favor, ingrese un año válido de 4 dígitos.');
                    valido = false;
                }

                // Validación del campo "Duración"
                var duracion = $('#duracion').val();
                if (!/^\d{1,3}$/.test(duracion)) {
                    alert('Por favor, ingrese una duración válida de hasta 3 dígitos.');
                    valido = false;
                }

                // Verificar que todos los campos estén completos
                $('#peliculaForm input, #peliculaForm select').each(function() {
                    if ($(this).val() === '') {
                        alert('Por favor, complete todos los campos.');
                        valido = false;
                        return false;
                    }
                });

                return valido;
            });

            // Botón para limpiar el formulario
            $('#borrar').on('click', function() {
                $('#peliculaForm')[0].reset();
            });
        });
    </script>
</head>
<body>
    <div class="container mt-5">
        <h1>Cinem@s</h1>
        <form id="peliculaForm" action="action.php" method="post" class="mt-4">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" id="titulo" name="titulo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="anio" class="form-label">Año:</label>
                <input type="text" id="anio" name="anio" class="form-control" maxlength="4" required>
            </div>
            <div class="mb-3">
                <label for="duracion" class="form-label">Duración (minutos):</label>
                <input type="text" id="duracion" name="duracion" class="form-control" maxlength="3" required>
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Género:</label>
                <select id="genero" name="genero" class="form-select" required>
                    <option value="">Seleccione un género</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Drama">Drama</option>
                    <option value="Terror">Terror</option>
                    <option value="Románticas">Románticas</option>
                    <option value="Suspenso">Suspenso</option>
                    <option value="Otras">Otras</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="button" id="borrar" class="btn btn-secondary">Borrar</button>
            </div>
        </form>
    </div>
</body>
</html>
