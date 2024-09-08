function validar() {
    var valor = true;
    var usuario = $('#usuario').val();
    var clave = $('#clave').val();
    var regex = /^(?=.*[a-zA-Z])(?=.*\d)/;

    // Resetear los estilos de los campos
    $('#usuario').removeClass('is-invalid is-valid');
    $('#clave').removeClass('is-invalid is-valid');

    // Validar nombre de usuario
    if (usuario === "") {
        $('#usuario').addClass('is-invalid');
        valor = false;
    } else {
        $('#usuario').addClass('is-valid');
    }

    // Validar contraseña
    if (clave === "" || clave.length < 8 || !regex.test(clave) || clave === usuario) {
        $('#clave').addClass('is-invalid');
        valor = false;
    } else {
        $('#clave').addClass('is-valid');
    }

    return valor;
}
