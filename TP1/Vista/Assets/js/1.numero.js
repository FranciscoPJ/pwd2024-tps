function validar() {
    var numero = document.getElementById('numero').value;
    var valor = null;
    if (numero === "" || isNaN(numero)) {
        alert("Por favor, ingrese un numero valido.");
        valor = false;
    } else {
        alert("Numero Enviado");
        valor = true;
    }
    return valor;
}