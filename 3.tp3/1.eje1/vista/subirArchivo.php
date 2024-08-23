<!DOCTYPE html>
<html>

<head>
    <title>Subir Archivo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluye jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').on('submit', function(event) {
                let archivoInput = $('#archivo')[0].files[0];
                let errores = [];
                let esValido = true;

                if (!archivoInput) {
                    errores.push("Por favor, seleccione un archivo.");
                    esValido = false;
                } else {
                    let extensionesPermitidas = [".doc", ".pdf"];
                    let archivoNombre = archivoInput.name;
                    let archivoExtension = archivoNombre.substring(archivoNombre.lastIndexOf('.')).toLowerCase();
                    if ($.inArray(archivoExtension, extensionesPermitidas) === -1) {
                        errores.push("Tipo de formato inválido. Se permiten archivos .doc o .pdf.");
                        esValido = false;
                    }

                    let tamanoMax = 2 * 1024 * 1024;
                    if (archivoInput.size > tamanoMax) {
                        errores.push("El archivo es demasiado grande. El tamaño máximo permitido es de 2 MB.");
                        esValido = false;
                    }
                }

                if (!esValido) {
                    alert(errores.join("\n"));
                    event.preventDefault();
                }
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Subir Archivo</h1>
        <form action="./action/action.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="archivo">Seleccionar archivo:</label>
                <input type="file" class="form-control-file" name="archivo" id="archivo" accept=".doc, .pdf" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir Archivo</button>
        </form>
    </div>
</body>

</html>