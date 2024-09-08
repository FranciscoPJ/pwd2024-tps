function validar() {
    var valor = true;
    
    var numero1 = $('#numero1');
    var numero2 = $('#numero2');
    var operacion = $('#operacion');

    // Limpiar clases previas
    numero1.removeClass('is-invalid is-valid');
    numero2.removeClass('is-invalid is-valid');
    operacion.removeClass('is-invalid is-valid');

    // Validar Numero 1
    if (numero1.val() === "" || !$.isNumeric(numero1.val())) {
        numero1.addClass('is-invalid');
        valor = false;
    } else {
        numero1.addClass('is-valid');
    }

    // Validar Numero 2
    if (numero2.val() === "" || !$.isNumeric(numero2.val())) {
        numero2.addClass('is-invalid');
        valor = false;
    } else {
        numero2.addClass('is-valid');
    }

    // Validar Operación
    if (operacion.val() === "") {
        operacion.addClass('is-invalid');
        valor = false;
    } else {
        operacion.addClass('is-valid');
    }

    return valor;
}
