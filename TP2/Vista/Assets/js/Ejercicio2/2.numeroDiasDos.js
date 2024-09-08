function validar() {
    var valor = true;
    var lunes = $('#lunes').val();
    var martes = $('#martes').val();
    var miercoles = $('#miercoles').val();
    var jueves = $('#jueves').val();
    var viernes = $('#viernes').val();

    // Resetear estado de los campos
    $('.form-control').removeClass('is-invalid');

    // Verificar si los campos están vacíos
    if (lunes === "" || martes === "" || miercoles === "" || jueves === "" || viernes === "") {
        if (lunes === "") $('#lunes').addClass('is-invalid');
        if (martes === "") $('#martes').addClass('is-invalid');
        if (miercoles === "") $('#miercoles').addClass('is-invalid');
        if (jueves === "") $('#jueves').addClass('is-invalid');
        if (viernes === "") $('#viernes').addClass('is-invalid');
        valor = false;
    } else {
        // Verificar si los valores son numéricos y están en el rango de 0 a 24
        if (!$.isNumeric(lunes) || lunes < 0 || lunes > 24) {
            $('#lunes').addClass('is-invalid');
            valor = false;
        }
        if (!$.isNumeric(martes) || martes < 0 || martes > 24) {
            $('#martes').addClass('is-invalid');
            valor = false;
        }
        if (!$.isNumeric(miercoles) || miercoles < 0 || miercoles > 24) {
            $('#miercoles').addClass('is-invalid');
            valor = false;
        }
        if (!$.isNumeric(jueves) || jueves < 0 || jueves > 24) {
            $('#jueves').addClass('is-invalid');
            valor = false;
        }
        if (!$.isNumeric(viernes) || viernes < 0 || viernes > 24) {
            $('#viernes').addClass('is-invalid');
            valor = false;
        }
    }

    return valor;
}
