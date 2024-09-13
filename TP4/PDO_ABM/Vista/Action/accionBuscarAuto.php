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

    $arrayDato = $objAbmAuto->buscar($datos); //array que contine los datos de un auto

    $colDatos = $objAbmAuto->solicitarDatos(); //array de preguntas de datos
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accion Buscar Auto</title>
</head>

<body>
    <p>
        <?php
        echo "<h2 align='center'>" . $mensaje . "</h2>";
        ?>
    </p>

    <div>
        <?php

        if (count($arrayDato) > 0) {

            echo "<table border='1' align='center'>";
            echo "<tr>";
            echo "<th>Patente</th>";
            echo "<th>Marca</th>";
            echo "<th>Modelo</th>";
            echo "<th>DNI</th>";
            echo "</tr>";

            foreach ($arrayDato as $dato) {

                echo '<tr><td style="width:100px;"  align="center">' . $dato->getPatente() . '</td>';

                echo '<td style="width:100px;" align="center">' . $dato->getMarca() . '</td>';

                echo '<td style="width:100px;" align="center">' . $dato->getModelo() . '</td>';

                echo '<td style="width:100px;" align="center">' . $dato->getObjDniDuenio()->getNroDni() . '</td>';

                echo "</tr>";
            }

            echo "</table>";

        } else {
            echo "<div align='center'>No tiene un auto asociado</div>";
        }

        ?>
    </div>
    <br>
    <div align="center"><a href="../buscarAuto.php">volver</a></div>
</body>

</html>