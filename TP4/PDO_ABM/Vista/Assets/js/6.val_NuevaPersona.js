function validar() {
    var valido = true;

    // Selección de elementos
    var fecha = $('#fechaNac');
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
    fecha.removeClass('is-invalid is-valid');
    
    // Obtener valores
    var valorDni = nroDni.val();
    var valorTel = tel.val();
    var valorDire = dire.val();
    var valorApellido = apellido.val();
    var valorNombre = nombre.val();
    var valorFechaNac = fecha.val();
    

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
    var expresionApellido = /^[a-zA-Z\s]+$/;
    if (valorApellido === "" || !expresionApellido.test(valorApellido)) {
        apellido.addClass('is-invalid');
        valido = false;
    } else {
        apellido.addClass('is-valid');
    }

    // Validación de Nombre
    var expresionNombre = /^[a-zA-Z\s]+$/;
    if (valorNombre === "" || !expresionNombre.test(valorNombre)) {
        nombre.addClass('is-invalid');
        valido = false;
    } else {
        nombre.addClass('is-valid');
    }

    // Función para convertir el formato dd/mm/yyyy a yyyy-mm-dd
    function setFecha(fecha) {
    var partes = fecha.split('/');
    if (partes.length === 3) {
        var dia = partes[0];
        var mes = partes[1];
       var anio = partes[2];
        fecha =  `${anio}-${mes}-${dia}`;  // Devolvemos en formato yyyy-mm-dd
    }
   return fecha
    }

var fechaObj = new Date();
var anioActual = fechaObj.getFullYear();
valorFechaNac = setFecha(valorFechaNac);// Convertimos el valor de la fecha a yyyy-mm-dd
 var anioIngresado = valorFechaNac.split('-')[0];  // Obtenemos el año de la fecha convertida

var edad = anioActual - anioIngresado  ;

if (valorFechaNac === null ||  edad < 18 || edad >90 ||  valorFechaNac === "") {
    fecha.addClass('is-invalid');
    valido = false;
} else {
    fecha.addClass('is-valid');  
}



    // Validación de Dirección - Formato de letras y números
    if (!/^[A-Za-z0-9\s]+$/.test(valorDire)) {  // Permite letras, números, espacios, comas, puntos y guiones
        dire.addClass('is-invalid');
        valido = false;
    } else {
        dire.addClass('is-valid');
    }

    return valido;
}
