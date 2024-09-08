<?php
include_once "Estructura/Header.php"
?>
<!-- a) 
    Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario y la password para loguearse. Los datos del formulario son enviados a un script verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo y en caso contrario un mensaje de error.

    b)
    Realizar la validación de este formulario. Chequear no solo que se hayan cargado el usuario y la contraseña antes de ser enviados al servidor sino que también debe realizar un control de contraseña segura (La contraseña debe tener como mínimo 8 caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener letras y números).

    c) 
    Aplicar Bootstrap de manera que la pantalla tenga un aspecto similar
-->
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4 h-40 row justify-content-center custom-border py-5 h-30 position-relative">
        <h2 class="fw-light f-4">Member Login</h2>

        <form action="Action/3.verificaPass.php" method="POST" onsubmit="return validar();">

            <!-- Input Username -->
            <div class="form-group position-relative">
                <i class="bi bi-person-fill position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%); font-size: 1.5rem; color: black;"></i>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Username" style="padding-left: 40px;">
                <div class="invalid-feedback">El nombre de usuario es requerido.</div>
            </div>
            <br>

            <!-- Input Password -->
            <div class="form-group position-relative">
                <i class="bi bi-lock-fill position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%); font-size: 1.5rem; color: black;"></i>
                <input type="password" class="form-control" id="clave" name="clave" placeholder="Password" style="padding-left: 40px;">
                <div class="invalid-feedback">La contraseña debe tener al menos 8 caracteres, incluir letras y números, y no puede ser igual al nombre de usuario.</div>
            </div>
            <br>

            <!-- Boton Login -->
            <button type="submit" class="btn btn-success btn-block" style="width: 100%;">Login</button>

            <!-- Boton Cerrar -->
            <button class="position-absolute custom-btn-x p-1 border-0 bg-transparent">x</button>

        </form>
    </div>
</div>

<script src="Assets/js/3.iniciarSesion.js"></script>
<?php
include_once "Estructura/Footer.php"
?>