function validar() {
    var valor = null;
    var numero1 = document.getElementById('numero1').value;
    var numero2 = document.getElementById('numero2').value;
    var operacion = document.getElementById('operacion').value;

    if (numero1 === "" || isNaN(numero1)){
        alert("Escriba un Numero para Numero 1.");
        valor = false;
    } else if (numero2 === "" || isNaN(numero2)){
        alert("Escriba un Numero para Numero 2.");
        valor = false;
    } else if (operacion === "") {
        alert("Seleccione una Operacion.");
        valor = false;
    } else {
        alert("Formula Enviada!");
        valor = true;
    }
    return valor;
}