function validar() {
    var valido = true;

    // Names del formulario
    var apellido = $('#Apellido');
    var nombre = $('#Nombre');
    var fecha = $('#fechaNac');
    var telefono = $('#Telefono');
    var domicilio = $('#Domicilio');

    // Valor de la fecha
    var valorFechaNac = fecha.val();

    // Limpio clases
    apellido.removeClass('is-invalid is-valid');
    nombre.removeClass('is-invalid is-valid');
    fecha.removeClass('is-invalid is-valid');
    telefono.removeClass('is-invalid is-valid');
    domicilio.removeClass('is-invalid is-valid');

    // Función para convertir el formato dd/mm/yyyy a yyyy-mm-dd
    function setFecha(fecha) {
        var partes = fecha.split('/');
        if (partes.length === 3) {
            var dia = partes[0];
            var mes = partes[1];
            var anio = partes[2];
            fecha = `${anio}-${mes}-${dia}`;  // Devolvemos en formato yyyy-mm-dd
        }
        return fecha;
    }
    
    // verifica todos los campos si estan vacios
    if (apellido.val().trim() === '' && nombre.val().trim() === '' && valorFechaNac === '' && telefono.val().trim() === '' && domicilio.val().trim() === '') {
        apellido.addClass('is-invalid');
        nombre.addClass('is-invalid');
        fecha.addClass('is-invalid');
        telefono.addClass('is-invalid');
        domicilio.addClass('is-invalid');
        valido = false;
    }

    // Apellido
    if (!/^[a-zA-Z\s]+$/.test(apellido.val())) {
        apellido.addClass('is-invalid');
        valido = false;
    } else {
        apellido.addClass('is-valid');

        // Nombre
        if (!/^[a-zA-Z\s]+$/.test(nombre.val())) {
            nombre.addClass('is-invalid');
            valido = false;
        } else {
            nombre.addClass('is-valid');

            // Fecha de Nacimiento
            var fechaObj = new Date(); // objeto Date
            var anioActual = fechaObj.getFullYear(); // se obtiene el anio
            valorFechaNac = setFecha(valorFechaNac); // Convertimos el valor de la fecha a yyyy-mm-dd
            var anioIngresado = valorFechaNac.split('-')[0]; // Obtenemos el año de la fecha convertida
            var edad = anioActual - anioIngresado;

            if (valorFechaNac === null || edad < 18 || edad > 90 || valorFechaNac === "") {
                fecha.addClass('is-invalid');
                valido = false;
            } else {
                fecha.addClass('is-valid');

                // Teléfono entre 7 y 12 dígitos
                if (!/^\d{7,12}$/.test(telefono.val())) {
                    telefono.addClass('is-invalid');
                    valido = false;
                } else {
                    telefono.addClass('is-valid');

                    // Domicilio (Permite letras, números, espacios, comas, puntos y guiones)
                    if (domicilio.val().trim() === '' || !/^[A-Za-z0-9\s]+$/.test(domicilio.val().trim())) {
                        domicilio.addClass('is-invalid');
                        valido = false;
                    } else {
                        domicilio.addClass('is-valid');
                    }
                }
            }
        }
    }

    return valido;
}
