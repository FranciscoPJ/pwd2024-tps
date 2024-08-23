<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Borde Grueso</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <style>
        .custom-border {
            border-width: 10px;
            border-color: #6c757d;
            /* Gris */
            border-style: solid;
            /* Asegura que el borde sea visible */
            align-items: center;
        }
        .h-40{
            height: 40%;
        }

        .custom-btn-x{
            top: 0;
            right: 0;
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100 ">
        <div class="col-md-4 h-40 row justify-content-center custom-border py-5  h-30 position-relative ">
            <h2 class="fw-light f-4">Member Login</h2>
            <form action="action/actionej3.php" method="post" onSubmit="return validar();">
                <div class="form-group position-relative">
                    <input type="text" class="form-control pl-5" id="usuario" name="usuario" placeholder="Username"
                        required>
                    <i class="bi bi-person-fill position-absolute"
                        style="left: 10px; top: 50%; transform: translateY(-50%); font-size: 1.5rem; color: black;"></i>
                </div>
                <div class="form-group position-relative">
                    <input type="password" class="form-control pl-5" id="clave" name="clave" placeholder="Password"
                        required>
                    <i class="bi bi-lock-fill position-absolute"
                        style="left: 10px; top: 50%; transform: translateY(-50%); font-size: 1.5rem; color: black;"></i>
                </div>
                <button type="submit" class="btn btn-success btn-block">Login</button>
            </form>
            <button class="position-absolute custom-btn-x  p-1 border-0 bg-transparent">x</button>
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