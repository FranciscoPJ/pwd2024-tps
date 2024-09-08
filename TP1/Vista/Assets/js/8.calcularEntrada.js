function validar(){
    valor = null;
    var edad = document.getElementById('edad').value;
    var operacion = document.getElementById('operacion').value;

    if (edad === "" || edad <= 0 || edad >= 115) {
        alert("Complete una Edad válida.");
        valor = false;
    } else if (operacion === "") {
        alert("Seleccione Un Opcion, Si Eres Estudiante.");
        valor = false;
    } else {
        alert("Datos Enviados!");
        valor = true;
    }
    return valor;
}