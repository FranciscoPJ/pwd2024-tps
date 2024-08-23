<?php
    include_once "../../control/persona.php";

    $datos = $_POST;
    $persona = new Persona();
    
    if($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];

        $persona->setNombre($nombre);
        $persona->setApellido($apellido);
        $persona->setEdad($edad);
        $persona->setDireccion($direccion);

        $mensaje = "Hola, yo soy " . $nombre . ", " . $apellido . " tengo " . $edad . " años y vivo en " . $direccion ;
    } else {
        $mensaje = "No hay datos";
    }
?>

</html>
    <head>
        <title>Procesar Datos</title>
    </head>
    <body>
        <h1>Datos</h1>
        <?php   
            echo $mensaje;
        ?>

        <br><br>
        <a href="../formulario.php">Volver al formulario</a>
    </body>
</html>
