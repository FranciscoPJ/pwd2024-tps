function validar() {
    var numero = $('#numero').val();
    var valor = true;

    // Resetear estado del campo
    $('#numero').removeClass('is-invalid');

    // Verificar si el campo está vacío o no es numérico
    if (numero === "" || !$.isNumeric(numero)) {
        $('#numero').addClass('is-invalid');
        $('.invalid-feedback').show();
        valor = false;
    } else {
        $('.invalid-feedback').hide();
    }

    return valor;
}
