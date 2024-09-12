<?php
include_once "../configuracion.php";
$objAbmAuto = new AbmAuto();
$listaAutos = $objAbmAuto->buscar(null);
?>

<?php
include_once "Estructura/Header.php";
?>

    <h3>Lista de Autos</h3>
    <table border="1">
        <?php
        //print_r($listaAutos);
        if (count($listaAutos) > 0) {


            foreach ($listaAutos as $objAuto) {

                echo '<tr><td style="width:100px;">' . $objAuto->getPatente() . '</td>';
                echo '<td style="width:100px;">' . $objAuto->getMarca() . '</td>';
                echo '<td style="width:100px;">' . $objAuto->getModelo() . '</td>';
                echo '<td style="width:100px;">' . $objAuto->getObjDniDuenio()->getApellido() . '</td>';
                echo '<td style="width:100px;">' . $objAuto->getObjDniDuenio()->getNombre() . '</td>';
                //href="ftabla_editar.php?
                echo '<td style="width:50px;" align="center"><a id=' . $objAuto->getPatente() . '">editar</a></td>'; //column 2
                //href="accion/abmTabla.php?accion=borrar&
                echo '<td style="width:50px;" align="center"><a id=' . $objAuto->getPatente() . '">borrar</a></td></tr>'; //column 3 
            }
        }
        echo "<div>no hay autos cargados</div>"

        ?>
    </table>

<?php
include_once "Estructura/Footer.php";
?>