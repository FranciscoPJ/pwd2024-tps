<?php
    include_once "../../control/persona.php";

    $datos = $_GET;
    $persona = new Persona();
    
    if($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];

        $persona->setNombre($nombre);
        $persona->setApellido($apellido);
        $persona->setEdad($edad);
        $persona->setDireccion($direccion);

        if($persona->esNumero($edad)){
            if ($edad >= 18) {
                $mensaje = "Hola ". $nombre . " " . $apellido . ", eres mayor de edad.";
            } else {
                $mensaje = "Hola ". $nombre . " " . $apellido . ", eres menor de edad.";
            }
        } else {
            $mensaje = "no hay edad";
        }

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
