/*
    En JavaScript puro, puedes seleccionar los elementos que están marcados (checked)
    utilizando el método querySelector o querySelectorAll. Si deseas seleccionar un solo
    elemento que esté marcado, utilizarías querySelector, y si necesitas una lista de 
    todos los elementos marcados, usarías querySelectorAll.
*/
function validar() {
    var valor = null;
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var edad = document.getElementById('edad').value;
    var direccion = document.getElementById('direccion').value;
    var estudio = document.querySelector('input[name="estudio"]:checked');
    var sexo = document.getElementById('sexo').value;
    
    // Expresión regular para validar que el nombre solo contenga letras
    var regexNombre = /^[a-zA-ZÀ-ÿ\s]+$/;

    if (nombre === "" || !regexNombre.test(nombre)) {
        alert("El Nombre solo debe contener letras y no debe estar vacío.");
        valor = false;
    } else if (apellido === "" || !regexNombre.test(apellido)) {
        alert("El Apellido solo debe contener letras y no debe estar vacío.");
        valor = false;
    } else if (edad === "" || edad <= 0 || edad >= 115) {
        alert("Complete una Edad válida.");
        valor = false;
    } else if (direccion === "") {
        alert("Complete la Dirección.");
        valor = false;
    } else if (estudio === null) {  // Verifica si hay un nivel de estudios seleccionado
        alert("Seleccione un Nivel de Estudios.");
        valor = false;
    } else if (sexo === "") {
        alert("Seleccione un Sexo.");
        valor = false;
    } else {
        alert("Datos Enviados!");
        valor = true;                                    
    }
    return valor;
}