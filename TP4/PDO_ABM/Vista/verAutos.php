<?php
include_once "../configuracion.php";
$objAbmAuto = new AbmAuto();
$listaAutos = $objAbmAuto->darArray(null);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista autos</title>
    <!--  Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php
        include_once "Estructura/Header.php";
        ?>

    </header>

    <main>
        <h3 class="text-center my-4">Lista de Autos</h3>
        <div class="container">
            <table class="table table-bordered table-striped table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if (count($listaAutos) > 0) {

                        
                        foreach ($listaAutos as $autosArray) {
                            echo '<tr>';
                            echo '<td>' . $autosArray['Patente'] . '</td>';
                            echo '<td >' . $autosArray['Marca'] . '</td>';
                            echo '<td>' . $autosArray['Modelo'] . '</td>';
                            echo '<td>' . $autosArray['ObjDniDuenio']['Apellido'] . '</td>';
                            echo '<td>' . $autosArray['ObjDniDuenio']['Nombre'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="5">No hay autos cargados</td></tr>';
                    }


                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <?php
        include_once "Estructura/Footer.php";
        ?>
    </footer>

</body>

</html>