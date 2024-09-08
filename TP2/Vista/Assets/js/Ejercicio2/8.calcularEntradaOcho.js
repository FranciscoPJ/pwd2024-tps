function validar() {
    var valor = true;
    var edad = $('#edad').val();
    var operacion = $('#operacion').val();

    // Resetear estados de los campos
    $('#edad').removeClass('is-invalid');
    $('#operacion').removeClass('is-invalid');
    $('.invalid-feedback').hide();

    // Validar edad
    if (edad === "" || edad <= 0 || edad >= 115) {
        $('#edad').addClass('is-invalid');
        $('#edad').siblings('.invalid-feedback').show();
        valor = false;
    }

    // Validar selección
    if (operacion === "") {
        $('#operacion').addClass('is-invalid');
        $('#operacion').siblings('.invalid-feedback').show();
        valor = false;
    }

    return valor;
}
