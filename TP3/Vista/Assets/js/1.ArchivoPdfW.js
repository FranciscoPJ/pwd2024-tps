function validar() {
    var valido = true;
    var archivo = $('#miArchivo').val();
    var inputArchivo = $('#miArchivo');

    // Validar que el archivo no esté vacío y sea de tipo .pdf o .doc
    var extension = archivo.split('.').pop().toLowerCase();  // Obtener la extensión del archivo

    if (archivo === "" || (extension !== "pdf" && extension !== "doc")) {
        inputArchivo.addClass('is-invalid');
        inputArchivo.removeClass('is-valid');
        valido = false;
    } else {
        inputArchivo.addClass('is-valid');
        inputArchivo.removeClass('is-invalid');
    }

    return valido;
}
