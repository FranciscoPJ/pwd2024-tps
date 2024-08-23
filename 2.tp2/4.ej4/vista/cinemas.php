<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Película - Cinem@s</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validar() {
            var valido = true;

            // Validación del campo "Título" - Solo texto
            var titulo = $('#titulo').val();
            if (!/^[a-zA-Z\s]+$/.test(titulo)) {
                alert('Por favor, ingrese solo letras en el campo Título.');
                valido = false;
            }

            // Validación del campo "Actores" - Solo texto
            var actores = $('#actores').val();
            if (!/^[a-zA-Z\s]+$/.test(actores)) {
                alert('Por favor, ingrese solo letras en el campo Actores.');
                valido = false;
            }

            // Validación del campo "Director" - Solo texto
            var director = $('#director').val();
            if (!/^[a-zA-Z\s]+$/.test(director)) {
                alert('Por favor, ingrese solo letras en el campo Director.');
                valido = false;
            }

            // Validación del campo "Guion" - Texto y números
            var guion = $('#guion').val();
            if (!/^[a-zA-Z0-9\s]+$/.test(guion)) {
                alert('Por favor, ingrese solo letras y números en el campo Guion.');
                valido = false;
            }

            // Validación del campo "Producción" - Texto y números
            var produccion = $('#produccion').val();
            if (!/^[a-zA-Z0-9\s]+$/.test(produccion)) {
                alert('Por favor, ingrese solo letras y números en el campo Producción.');
                valido = false;
            }

            // Validación del campo "Año"
            var anio = $('#anio').val();
            if (!/^\d{4}$/.test(anio)) {
                alert('Por favor, ingrese un año válido de 4 dígitos.');
                valido = false;
            }

            // Validación del campo "Nacionalidad" - Solo texto
            var nacionalidad = $('#nacionalidad').val();
            if (!/^[a-zA-Z\s]+$/.test(nacionalidad)) {
                alert('Por favor, ingrese solo letras en el campo Nacionalidad.');
                valido = false;
            }

            // Validación del campo "Duración" - Solo números
            var duracion = $('#duracion').val();
            if (!/^\d{1,3}$/.test(duracion)) {
                alert('Por favor, ingrese una duración válida de hasta 3 dígitos.');
                valido = false;
            }

            // Validación del campo "Restricciones de edad"
            if (!$('input[name="restricciones"]:checked').val()) {
                alert('Por favor, seleccione una restricción de edad.');
                valido = false;
            }

            // Verificar que todos los campos estén completos
            $('#peliculaForm input, #peliculaForm select, #peliculaForm textarea').each(function() {
                if ($(this).val() === '') {
                    alert('Por favor, complete todos los campos.');
                    valido = false;
                    return false;
                }
            });

            return valido;
        }

        $(document).ready(function() {
            // Botón para limpiar el formulario
            $('#borrar').on('click', function() {
                $('#peliculaForm')[0].reset();
            });
        });
    </script>
</head>
<body>
    <div class="container mt-18">
        <h1>Cinem@s</h1>
        <form id="peliculaForm" action="action/actionej4.php" method="post" class="mt-4" onsubmit="return validar();">
            
            <table>   
                <tr>
                    <td>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" id="titulo" name="titulo" class="form-control" required>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="actores" class="form-label">Actores</label>
                            <input type="text" id="actores" name="actores" class="form-control" required>
                        </div>
                    </td>
                </tr> 
                
                <tr>
                    <td>
                        <div class="mb-3">
                            <label for="director" class="form-label">Director</label>
                            <input type="text" id="director" name="director" class="form-control" required>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="guion" class="form-label">Guion</label>
                            <input type="text" id="guion" name="guion" class="form-control" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label for="produccion" class="form-label">Producción</label>
                            <input type="text" id="produccion" name="produccion" class="form-control" required>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="anio" class="form-label">Año</label>
                            <input type="text" id="anio" name="anio" class="form-control" maxlength="4" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label for="nacionalidad" class="form-label">Nacionalidad</label>
                            <input type="text" id="nacionalidad" name="nacionalidad" class="form-control" maxlength="3" required>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <label for="genero" class="form-label">Género</label>
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
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label for="duracion" class="form-label">Duración</label>
                            <input type="text" id="duracion" name="duracion" class="form-control" maxlength="3" required>(minutos)
                        </div>
                    </td>
                    <td>
                        <label for="restricciones" class="form-label">Restricciones de edad</label><br>
                        <input type="radio" id="restricciones" name="restricciones" value="Todos"> Todos los Públicos
                        <input type="radio" id="restricciones" name="restricciones" value="7"> Mayores de 7 años
                        <input type="radio" id="restricciones" name="restricciones" value="18"> Mayores de 18 años
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Sinopsis<br>
                        <textarea name="mensajeTarea" id="mensaje" cols="50" rows="6" class="form-control" required></textarea>
                    </td> 
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <button type="button" id="borrar" class="btn btn-secondary">Borrar</button>
                        </div>
                    </td>
                </tr>                                
            </table>
        </form>
    </div>
</body>
</html>
