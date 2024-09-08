function validar() {
    var valor = null;
    var lunes = document.getElementById('lunes').value;
    var martes = document.getElementById('martes').value;
    var miercoles = document.getElementById('miercoles').value;
    var jueves = document.getElementById('jueves').value;
    var viernes = document.getElementById('viernes').value;

    // Verifica si todos los campos están llenos
    if (lunes === "" || martes === "" || miercoles === "" || jueves === "" || viernes === "") {
        alert("Por favor, complete todos los campos.");
        valor = false;
    } else {
        // Verifica si todos los valores son numeros y son mayores o iguales a cero
        if (isNaN(lunes) || isNaN(martes) || isNaN(miercoles) || isNaN(jueves) || isNaN(viernes)) {
            alert("Por favor, ingrese valores numericos en todos los campos.");
            valor = false;
        } else {
            if (lunes < 0 || lunes > 24 ||
                martes < 0 || martes > 24 ||
                miercoles < 0 || miercoles > 24 ||
                jueves < 0 || jueves > 24 ||
                viernes < 0 || viernes > 24) {
                alert("Por favor, ingrese valores entre 0 y 24 para todos los días.");
                valor = false;
            } else {
                alert("Numeros enviados.");
                valor = true;                
            }     
        }
    }
    return valor;
}