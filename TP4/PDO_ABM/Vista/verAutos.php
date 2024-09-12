<?php
include_once "../configuracion.php";
$objAbmAuto = new AbmAuto();

$listaAutos = $objAbmAuto->buscar(null);
?>
<?php
include_once "estructura/Header.php";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <title>Ejemplo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
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
</body>

</html>
<?php
include_once "estructura/Footer.php";
?>