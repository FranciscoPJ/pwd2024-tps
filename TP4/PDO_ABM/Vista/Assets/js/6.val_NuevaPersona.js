function validar() {
    var valido = true;

    // Selección de elementos
    var fechaNac = $('#fechaNac');
    var nombre = $('#Nombre');
    var apellido = $('#Apellido');
    var nroDni = $('#NroDni');
    var tel = $('#Telefono');
    var dire = $('#Domicilio');
   
    // Limpia las clases anteriores
    nroDni.removeClass('is-invalid is-valid');
    tel.removeClass('is-invalid is-valid');
    dire.removeClass('is-invalid is-valid');
    apellido.removeClass('is-invalid is-valid');
    nombre.removeClass('is-invalid is-valid');
    fechaNac.removeClass('is-invalid is-valid');
    
    // Obtener valores
    const valorDni = nroDni.val();
    const valorTel = tel.val();
    const valorDire = dire.val();
    const valorApellido = apellido.val();
    const valorNombre = nombre.val();
    const valorFechaNac = fechaNac.val();
    

    // Validación de DNI - 7 a 8 dígitos
    var expresionDni = /^\d{7,8}$/;
    if (!expresionDni.test(valorDni)) {
        nroDni.addClass('is-invalid');
        valido = false;
    } else {
        nroDni.addClass('is-valid');
    }

// Validación de Teléfono entre 7 y 12 dígitos
    var expresionTel = /^\d{7,12}$/;
    if (!expresionTel.test(valorTel)) {
    tel.addClass('is-invalid');
    valido = false;
} else {
    tel.addClass('is-valid');
}
    // Validación de Apellido
    if (valorApellido === "") {
        apellido.addClass('is-invalid');
        valido = false;
    } else {
        apellido.addClass('is-valid');
    }

    // Validación de Nombre
    if (valorNombre === "") {
        nombre.addClass('is-invalid');
        valido = false;
    } else {
        nombre.addClass('is-valid');
    }


    // Validación de Dirección - Formato de letras y números
    if (!/^[A-Za-z\s]+\d+$/.test(valorDire)) {
        dire.addClass('is-invalid');
        valido = false;
    } else {
        dire.addClass('is-valid');
    }

    return valido;
}
