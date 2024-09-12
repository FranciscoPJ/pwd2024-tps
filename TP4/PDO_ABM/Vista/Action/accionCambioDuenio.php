<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Actualizar Datos de Persona</title>
   
</head>
<body c>
    <?php

    require_once("../../../configuracion.php");
   
    ?>

<main¿>

    <div ¿>
        <h2>Cambio de Dueño de Auto</h2>
        <div class="container text-center">
        <?php

            $datos = data_submitted();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $patente = $datos['patente'];
                $dni = $datos['nroDni'];

                $abmAuto = new AbmAuto();
                $abmPersona = new AbmPersona();

                // Verificar si el auto y la persona existen en la base de datos
                $autoExistente = $abmAuto->Buscar($patente);
                $personaExistente = $abmPersona->obtenerDatosPersona($dni);

                if ($autoExistente && $personaExistente) {
                    // Realizar el cambio de dueño del auto
                    $resultado = $abmAuto->modificarDuenioAuto($patente, $dni);

                    if (strpos($resultado, 'con éxito') !== false) {
                        echo "Cambio de dueño realizado con éxito.";
                    } else {
                        echo "Error: $resultado";
                    }
                } else {
                    echo "El auto o la persona no existen en la base de datos.";
                }
            }
            ?>
        </div>
    </div>
</main>
</body>
</html>



