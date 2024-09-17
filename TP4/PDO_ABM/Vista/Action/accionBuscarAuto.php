<?php
include_once '../../configuracion.php';

$datos = data_submitted();
//print_r($datos);

//verEstructura($datos);
$resp = false;
$objAbmAuto = new AbmAuto();

if (isset($datos['accion'])) {
    if ($datos['accion'] == 'editar') {
        if ($objAbmAuto->modificacion($datos)) { // modifica
            $resp = true;
        }
    }
    if ($datos['accion'] == 'borrar') {
        if ($objAbmAuto->baja($datos)) { // elimina
            $resp = true;
        }
    }
    if ($datos['accion'] == 'nuevo') {
        if ($objAbmAuto->alta($datos)) { // agrega
            $resp = true;
        }
    }
    if ($datos['accion'] == 'buscarPatente') {
        if ($objAbmAuto->buscar($datos)) { // busca
            $resp = true;
        }
    }

    if ($resp) {
        $mensaje = "La accion " . $datos['accion'] . " se realizo correctamente.";
    } else {
        $mensaje = "La accion " . $datos['accion'] . " no pudo concretarse.";
    }

    $arrayDato = $objAbmAuto->darArray($datos); //array que contine los datos de un auto

    $colDatos = $objAbmAuto->solicitarDatos(); //array de preguntas de datos
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accion Buscar Auto</title>
    <!--  Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5"></div>
    <p>
        <?php
        echo "<h2 class='text-center text-primary'>" . $mensaje . "</h2>";
        ?>
    </p>

    <div>

        <div class="table-responsive mx-5">

            <?php
            if (count($arrayDato) > 0) {
                echo '<table class="my-4" >';
                echo '<table class="table table-bordered table-striped table-hover text-center">';
                echo '<thead class="table-dark">';
                echo '<tr>';
                echo '<th>Patente</th>';
                echo '<th>Marca</th>';
                echo '<th>Modelo</th>';
                echo '<th>DNI</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                foreach ($arrayDato as $dato) {

                    echo '<tr>';
                    echo '<td>' . $dato['Patente'] . '</td>';
                    echo '<td>' . $dato['Marca'] . '</td>';
                    echo '<td>' . $dato['Modelo'] . '</td>';
                    echo '<td>' . $dato['ObjDniDuenio']['NroDni'] . '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo "<div class='alert alert-warning text-center'>No tiene un auto asociado</div>";
            }
            ?>
        </div>
        <div class="text-center mt-4">
            <a href="../buscarAuto.php" class="btn btn-primary">Volver</a>
        </div>
    </div>
</body>

</html>