function validar() {
    var valor = true;
    var nombre = $('#nombre').val();
    var apellido = $('#apellido').val();
    var edad = $('#edad').val();
    var direccion = $('#direccion').val();

    // Expresión regular para validar solo letras
    var regexNombre = /^[a-zA-ZÀ-ÿ\s]+$/;

    // Validar nombre
    if (nombre === "" || !regexNombre.test(nombre)) {
        $('#nombre').addClass('is-invalid');
        valor = false;
    } else {
        $('#nombre').removeClass('is-invalid');
    }

    // Validar apellido
    if (apellido === "" || !regexNombre.test(apellido)) {
        $('#apellido').addClass('is-invalid');
        valor = false;
    } else {
        $('#apellido').removeClass('is-invalid');
    }

    // Validar edad
    if (edad === "" || edad <= 0 || edad >= 115) {
        $('#edad').addClass('is-invalid');
        valor = false;
    } else {
        $('#edad').removeClass('is-invalid');
    }

    // Validar dirección
    if (direccion === "") {
        $('#direccion').addClass('is-invalid');
        valor = false;
    } else {
        $('#direccion').removeClass('is-invalid');
    }

    return valor;
}
