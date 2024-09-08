function validar() {
    var valor = true;
    var nombre = $('#nombre').val();
    var apellido = $('#apellido').val();
    var edad = $('#edad').val();
    var direccion = $('#direccion').val();
    var colEstudios = $('input[name="estudio"]:checked');
    var sexo = $('#sexo').val();
    var deportes = $('input[name="deportes[]"]:checked');

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

    // Validar direccion
    if (direccion === "") {
        $('#direccion').addClass('is-invalid');
        valor = false;
    } else {
        $('#direccion').removeClass('is-invalid');
    }

    // Validar nivel de estudios
    if (colEstudios.length === 0) {
        $('#estudio-group').addClass('is-invalid');
        $('#estudio-group .invalid-feedback').show();
        valor = false;
    } else {
        $('#estudio-group').removeClass('is-invalid');
        $('#estudio-group .invalid-feedback').hide();
    }

    // Validar sexo
    if (sexo === "") {
        $('#sexo').addClass('is-invalid');
        valor = false;
    } else {
        $('#sexo').removeClass('is-invalid');
    }

    // Validar deportes
    if (deportes.length === 0) {
        $('input[name="deportes[]"]').first().parent().parent().addClass('is-invalid');
        valor = false;
    } else {
        $('input[name="deportes[]"]').first().parent().parent().removeClass('is-invalid');
    }

    return valor;
}

