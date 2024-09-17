<?php
include_once '../../configuracion.php';

$dni = data_submitted(); //obtengo array del NroDni
//print_r($dni);

$objAbmPersona = new AbmPersona();
$objAbmAuto = new AbmAuto();

$colDatosPersona = $objAbmPersona->darArray($dni);
//print_r($colDatosPersona);

$valorDni = $dni['NroDni'];
$patente = ["DniDuenio" => $valorDni];
$colDatosAuto = $objAbmAuto->darArray($patente);
//print_r($colDatosAuto);

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona y Sus Autos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <!-- Datos de la Persona -->
        <h2 align="center"> Datos persona </h2>

        <div class="card">

            <div class=" mb-4" class="card-body  ">
                <div class="mx-5">
                    <?php

                    if (count($colDatosPersona) > 0) {

                        foreach ($colDatosPersona as $datoPersona) {

                            echo '<br><p> <strong> DNI:</strong> ' . $datoPersona['NroDni'] . '.<br> </p>';
                            echo '<p> <strong> Apellido:</strong> ' . $datoPersona['Apellido'] . '.<br></p>';
                            echo '<p> <strong> Nombre:</strong> ' . $datoPersona["Nombre"] . '.<br></p>';
                            // echo '<p> <strong> Fecha de Nacimiento:</strong> ' . $datoPersona['fechaNac'] . '.<br></p>';
                            // echo '<p> <strong> Telefono:</strong> ' . $datoPersona['Telefono'] . '.<br></p>';
                            // echo '<p> <strong> Domicilio:</strong> ' . $datoPersona['Domicilio'] . '.<br></p>';
                        }
                    } else {
                        echo '<div class="alert alert-warning">Esta persona no está registrada.</div>';
                    }

                    ?>
                </div>
            </div>
        </div>
        <!-- Datos de los autos -->
        <br><br>
        <?php

        if (count($colDatosAuto) > 0) {
            echo '<h2 class="text-center mb-4" >Lista de Autos Asociados</h2>';
            echo '<div class="table-responsive">';
            echo '<table class="table table-bordered table-striped table-hover text-center">';
            echo '<thead class="table-dark">';

            echo "<tr>";
            echo "<th>Patente</th>";
            echo "<th>Marca</th>";
            echo "<th>Modelo</th>";
            echo "</tr>";
            echo '</thead>';
            echo '<tbody>';

            foreach ($colDatosAuto as $datoAuto) {
                echo '<tr>';
                echo '<td>' . $datoAuto["Patente"] . '</td>';
                echo '<td>' . $datoAuto["Marca"] . '</td>';
                echo '<td>' . $datoAuto["Modelo"] . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            //echo '<td style="width:100px;">' . $datoAuto->getObjDniDuenio()->getNroDni() . '</td>';
        } else {
            echo '<h4 class="alert alert-warning text-center">Esta persona no tiene un autos asociados</h4>';
        }

        ?>

        <!-- Botón de Volver -->
        <div class="text-center mt-4">
            <a href="../listaPersonas.php" class="btn btn-primary">Volver atrás</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>