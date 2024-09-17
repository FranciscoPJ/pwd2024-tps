<?php
include_once "../configuracion.php";
$objAbmAuto = new AbmAuto();
$listaAutos = $objAbmAuto->buscar(null);

include_once "Estructura/Header.php";

?>

<h3 class="text-center my-4"> Ejercicio 3: Lista de Autos</h3>
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

                for ($i = 0; $i < count($listaAutos); $i++) {
                    echo '<tr>';
                    echo '<td>' . $listaAutos[$i]->getPatente() . '</td>';
                    echo '<td >' . $listaAutos[$i]->getMarca() . '</td>';
                    echo '<td>' . $listaAutos[$i]->getModelo() . '</td>';
                    echo '<td>' . $listaAutos[$i]->getObjDniDuenio()->getApellido() . '</td>';
                    echo '<td>' . $listaAutos[$i]->getObjDniDuenio()->getNombre() . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="5">No hay autos cargados</td></tr>';
            }


            ?>
        </tbody>
    </table>
</div>
<?php
include_once "Estructura/Footer.php";
?>