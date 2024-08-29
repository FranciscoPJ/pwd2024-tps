<!DOCTYPE html>
<html>

<head>
    <title>Subir Archivo de Texto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#formulario').on('submit', function(e) {
                var archivoInput = $('#archivo')
                var archivo = archivoInput[0].files[0]
                var mensajeError = ""
                if (!archivo) {
                    mensajeError = "Por favor, seleccione un archivo de texto."
                } else {
                    var extensionesPermitidas = [".txt"]
                    var archivoNombre = archivo.name
                    var archivoExtension = archivoNombre.substring(archivoNombre.lastIndexOf('.')).toLowerCase()
                    if ($.inArray(archivoExtension, extensionesPermitidas) === -1) {
                        mensajeError = "Formato no válido. Se permite solo archivos de texto (.txt)."
                    }
                }
                if (mensajeError) {
                    alert(mensajeError)
                    e.preventDefault()
                }
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Subir Archivo de Texto</h1>
        <form id="formulario" action="./action/action.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="archivo">Seleccionar archivo de texto:</label>
                <input type="file" class="form-control-file" name="archivo" id="archivo" accept=".txt" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir Archivo de Texto</button>
            <a href="../vista/" class="btn btn-dark">Volver</a>
        </form>
    </div>
</body>
</html>