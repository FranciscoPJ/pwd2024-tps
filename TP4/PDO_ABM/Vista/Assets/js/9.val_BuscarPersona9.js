function validar() {
    var valido = true;
    
    // NroDni
    var nroDni = $('#NroDni');

    // Limpio clases
    nroDni.removeClass('is-invalid is-valid');

    // Validacion del campo "Numero de Documento" - Solo numeros de 7 a 8 dígitos
    if (!/^\d{7,8}$/.test(nroDni.val()) || nroDni.val() === "") {
        nroDni.addClass('is-invalid');
        valido = false;
    } else {
        nroDni.addClass('is-valid');
    }

    return valido;
}
