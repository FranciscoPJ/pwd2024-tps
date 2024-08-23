<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center text-secondary">Member Login</h2>
                <form action="verificaPass.php" method="post" onSubmit="return validar();">
                    <div class="form-group">
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="clave" name="clave" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function validar() {
            var usuario = $('#usuario').val();
            var clave = $('#clave').val();

            if (usuario.length === 0 || clave.length === 0) {
                alert("Por favor, complete todos los campos.");
                return false;
            }

            if (clave.length < 8) {
                alert("La contraseña debe tener al menos 8 caracteres.");
                return false;
            }

            var regex = /^(?=.*[a-zA-Z])(?=.*\d)/;
            if (!regex.test(clave)) {
                alert("La contraseña debe contener letras y números.");
                return false;
            }

            if (clave === usuario) {
                alert("La contraseña no puede ser igual al nombre de usuario.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
