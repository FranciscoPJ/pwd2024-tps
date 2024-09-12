<?php
include_once '../../configuracion.php';

$dni = data_submitted(); //obtengo array del NroDni
//print_r($dni);

$objAbmPersona = new AbmPersona();
$objAbmAuto = new AbmAuto();

$colDatosPersona = $objAbmPersona->buscar($dni);
//print_r($colDatosPersona);

$valorDni = $dni['NroDni'];
$patente = ["DniDuenio" => $valorDni];
$colDatosAuto = $objAbmAuto->buscar($patente);
//print_r($colDatosAuto);

?>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona y Sus Autos</title>
</head>

<body>
    <div align="center">
        <?php
        if (count($colDatosPersona) > 0) {

            foreach ($colDatosPersona as $datoPersona) {
                echo '<strong>DNI:</strong> ' . $datoPersona->getNroDni() . '.<br>';

                echo '<strong>Apellido:</strong> ' . $datoPersona->getApellido() . '.<br>';

                echo '<strong>Nombre:</strong> ' . $datoPersona->getNombre() . '.<br>';

                echo '<strong>Fecha de Nacimiento:</strong> ' . $datoPersona->getFechaNac() . '.<br>';

                echo '<strong>Telefono:</strong> ' . $datoPersona->getTelefono() . '.<br>';

                echo '<strong>Domicilio:</strong> ' . $datoPersona->getDomicilio() . '.<br>';
            }
        } else {
            echo "Esta perona no esta registrado";
        }

        ?>
    </div>
    
    <?php
    if (count($colDatosAuto) > 0) {
        echo "<h2 align='center'>Lista de Autos Asociados</h2>";
        
        echo "<table border='1' align='center' style='height: auto;'>";
        echo "<tr>";
        echo "<th>Patente</th>";
        echo "<th>Marca</th>";
        echo "<th>Modelo</th>";
        echo "</tr>";
        foreach ($colDatosAuto as $datoAuto) {
            
            echo '<tr><td style="width:100px;">' . $datoAuto->getPatente() . '</td>';

            echo '<td style="width:100px;">' . $datoAuto->getMarca() . '</td>';

            echo '<td style="width:100px;">' . $datoAuto->getModelo() . '</td>';

            //echo '<td style="width:100px;">' . $datoAuto->getObjDniDuenio()->getNroDni() . '</td>';

            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<br><div align='center'>Esta persona no tiene un autos asociados</div>";
    }

    ?>
    <div>

    </div>
</body>

</html>