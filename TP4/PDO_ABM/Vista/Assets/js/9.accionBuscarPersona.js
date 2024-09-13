function validar() {
    var valido = true;

    // Names del formulario
    var apellido = $('#Apellido');
    var nombre = $('#Nombre');
    var fechaNac = $('#fechaNac');
    var telefono = $('#Telefono');
    var domicilio = $('#Domicilio');

    // Limpio clases
    apellido.removeClass('is-invalid is-valid');
    nombre.removeClass('is-invalid is-valid');
    fechaNac.removeClass('is-invalid is-valid');
    telefono.removeClass('is-invalid is-valid');
    domicilio.removeClass('is-invalid is-valid');

    // Apellido
    if (!/^[a-zA-Z\s]+$/.test(apellido.val())) {
        apellido.addClass('is-invalid');
        valido = false;
    } else {
        apellido.addClass('is-valid');
    }

    // Nombre
    if (!/^[a-zA-Z\s]+$/.test(nombre.val())) {
        nombre.addClass('is-invalid');
        valido = false;
    } else {
        nombre.addClass('is-valid');
    }

    // Fecha de Nacimiento
    if (fechaNac.val() === "") {
        fechaNac.addClass('is-invalid');
        valido = false;
    } else {
        fechaNac.addClass('is-valid');
    }

    // Telefono
    if (!/^\d+$/.test(telefono.val())) {
        telefono.addClass('is-invalid');
        valido = false;
    } else {
        telefono.addClass('is-valid');
    }

    // Domicilio
    if (domicilio.val().trim() === '') {
        domicilio.addClass('is-invalid');
        valido = false;
    } else {
        domicilio.addClass('is-valid');
    }

    return valido;
}
