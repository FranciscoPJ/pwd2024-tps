
function validar() {


    
    var valido = true;
    //nro Dni
    const nroDni = $('[name="NroDni"]');
    // Nro Patente
    const nroPatente = $('[name="Patente"]');



    // Limpia las clases anteriores
    nroDni.removeClass('is-invalid is-valid');
    nroPatente.removeClass('is-invalid is-valid');


    // convierte el valor patente a mayúsculas
    var valorPatente = nroPatente.val().toUpperCase();

    // Asegura que tenga exactamente 3 letras y 3 números sin espacio
    if (/^[A-Z]{3}\d{3}$/.test(valorPatente)) { 
        valorPatente = valorPatente.slice(0, 3) + ' ' + valorPatente.slice(3); // Inserta un espacio entre letras y números
    }

    // Actualiza el valor del campo con el formato correcto
    nroPatente.val(valorPatente);

    // Validación del campo "Patente" - formato de 3 letras seguidas de un espacio y 3 números (ej: "ABC 123")
    if (!/^[A-Z]{3}\s\d{3}$/.test(nroPatente.val())) {
        nroPatente.addClass('is-invalid');
        valido = false;
    } else {
        nroPatente.addClass('is-valid');
    }

    // Validacion del campo "Numero de Documento" - Solo numeros de 7 a 8 dígitos
    if (!/^\d{7,8}$/.test(nroDni.val()) || nroDni.val() === "") {
    nroDni.addClass('is-invalid');
    valido = false;
    } else {
    nroDni.addClass('is-valid');
    }




    return valido;
}


    
