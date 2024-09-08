function validar(){
    var valor = null; 
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var edad = document.getElementById('edad').value;
    var direccion = document.getElementById('direccion').value;  
    // Expresión regular para validar que el nombre solo contenga letras
    var regexNombre = /^[a-zA-ZÀ-ÿ\s]+$/;
    
    if(nombre === "" || !regexNombre.test(nombre)){
        alert("El Nombre solo debe contener letras y no debe estar vacío.");
        valor = false;
    } else if (apellido == "" || !regexNombre.test(apellido)){
        alert("El Apellido solo debe contener letras y no debe estar vacío.");
        valor = false;
    } else if (edad <= 0 || edad >= 115){
        alert("Complete Una Edad Verdadero");
        valor = false;
    } else if(direccion == ""){
        alert("Complete Direccion");
        valor = false;
    } else {
        alert("Datos Enviados!");
        valor = true;
    }
    return valor;
}