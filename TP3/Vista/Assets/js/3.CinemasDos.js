function validar() {
    var valido = true;

    // Campos del formulario
    var titulo = $('#titulo');
    var actores = $('#actores');
    var director = $('#director');
    var guion = $('#guion');
    var produccion = $('#produccion');
    var anio = $('#anio');
    var nacionalidad = $('#nacionalidad');
    var genero = $('#genero');
    var duracion = $('#duracion');
    var colRestriccionesEdad = $('input[name="restricciones"]:checked');
    var archivo = $('#miArchivo');

    // Limpiar clases previas
    titulo.removeClass('is-invalid is-valid');
    actores.removeClass('is-invalid is-valid');
    director.removeClass('is-invalid is-valid');
    guion.removeClass('is-invalid is-valid');
    produccion.removeClass('is-invalid is-valid');
    anio.removeClass('is-invalid is-valid');
    nacionalidad.removeClass('is-invalid is-valid');
    genero.removeClass('is-invalid is-valid');
    duracion.removeClass('is-invalid is-valid');
    $('input[name="restricciones"]').removeClass('is-invalid');
    archivo.removeClass('is-invalid is-valid');

    // Validación del campo "Título" - Solo texto
    if (!/^[a-zA-Z\s]+[0-9]*$/.test(titulo.val())) {
        titulo.addClass('is-invalid');
        valido = false;
    } else {
        titulo.addClass('is-valid');
    }

    // Validación del campo "Actores" - Solo texto
    if (!/^[a-zA-Z\s]+$/.test(actores.val())) {
        actores.addClass('is-invalid');
        valido = false;
    } else {
        actores.addClass('is-valid');
    }

    // Validación del campo "Director" - Solo texto
    if (!/^[a-zA-Z\s]+$/.test(director.val())) {
        director.addClass('is-invalid');
        valido = false;
    } else {
        director.addClass('is-valid');
    }

    // Validación del campo "Guion" - Texto o números
    if (!/^[a-zA-Z\s]+[0-9]*$/.test(guion.val())) {
        guion.addClass('is-invalid');
        valido = false;
    } else {
        guion.addClass('is-valid');
    }

    // Validación del campo "Producción" - Texto y números
    if (!/^[a-zA-Z\s]+[0-9]*$/.test(produccion.val())) {
        produccion.addClass('is-invalid');
        valido = false;
    } else {
        produccion.addClass('is-valid');
    }

    // Validación del campo "Año" - Número entre 1895 y 2030
    if (!/^[0-9]{4}$/.test(anio.val()) || anio.val() < 1895 || anio.val() > 2030) {
        anio.addClass('is-invalid');
        valido = false;
    } else {
        anio.addClass('is-valid');
    }

    // Validación del campo "Nacionalidad" - Solo texto
    if (!/^[a-zA-Z\s]+$/.test(nacionalidad.val())) {
        nacionalidad.addClass('is-invalid');
        valido = false;
    } else {
        nacionalidad.addClass('is-valid');
    }

    // Validación del campo "Género" - Debe estar seleccionado
    if (genero.val() === "") {
        genero.addClass('is-invalid');
        valido = false;
    } else {
        genero.addClass('is-valid');
    }

    // Validación del campo "Duración" - Máximo 3 dígitos
    if (!/^[0-9]{1,3}$/.test(duracion.val())) {
        duracion.addClass('is-invalid');
        valido = false;
    } else {
        duracion.addClass('is-valid');
    }

    // Validación del campo "Restricciones de edad" - Debe estar seleccionado
    if (colRestriccionesEdad.length === 0) {
        $('input[name="restricciones"]').addClass('is-invalid');
        valido = false;
    } else {
        $('input[name="restricciones"]').removeClass('is-invalid').addClass('is-valid');
    }

    // Validación del campo "Archivo" - Asegurarse de que se ha seleccionado una imagen
    if (archivo.val() === "") {
        archivo.addClass('is-invalid');
        valido = false;
    } else {
        var archivoExtension = archivo.val().split('.').pop().toLowerCase();
        var tiposValidos = ['jpg', 'jpeg', 'png', 'gif']; // Tipos de imágenes válidos
        if (!tiposValidos.includes(archivoExtension)) {
            archivo.addClass('is-invalid');
            valido = false;
        } else {
            archivo.addClass('is-valid');
        }
    }

    return valido;
}
