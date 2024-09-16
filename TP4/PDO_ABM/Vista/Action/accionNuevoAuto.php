<?php
include_once '../../configuracion.php';

$datos = data_submitted();
//print_r($datos);

$objAbmPersona = new AbmPersona();
$objAbmAuto = new AbmAuto();
$resp = null;

if (isset($datos['accion'])) {

    if ($datos['accion'] == 'nuevo') {   // accedo a registrar un objeto a la bd  

        if ($objAbmPersona->existePersona(["NroDni" => $datos['DniDuenio']])) { //si  existe el objeto persona, agregar persona

            $objPersona = $objAbmPersona->buscar(["NroDni" => $datos['DniDuenio']]); // obtengo el objeto
            $datos['DniDuenio'] = $objPersona; //le agrego un objetoDuenio al auto

            if (!$objAbmAuto->existeAuto(["Patente" => $datos['Patente']])) {  // si no existe el objeto auto, agrega auto

                if ($objAbmAuto->alta($datos)) { // agrega el objeto auto a la BD

                    $resp = 3; // se agrego el auto con exito
                }

            } else { // La patente existe, debe poner otro patente
                $resp = 2;
            }

        } else { //sino (No existe la persona ingresada)
            $resp = 1;
        } //fin else 

    } // fin de pregunat accion "nuevo" 
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <title>Nueva Persona</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
        <?php
        if ($resp == 3) {
            echo "<div>";
            echo "<h3>Nuevo Auto Ingresado!</h3>";
            echo "<p>La Accion Agregar Auto Se Realizo Correctamente.</p>";
            echo "</div><br>";
            echo "<a href='../NuevoAuto.php'>Ir Formulario</a><br>";
        } elseif ($resp == 2) {
            echo "<div>";
            echo "<h3>Error:</h3>";
            echo "<p>Este Auto Existe, Elija Otra Patente.</p>";
            echo "</div><br>";
            echo "<a href='../NuevoAuto.php'>Ir Formulario Auto</a><br>";
        } elseif($resp == 1){
            echo "<div>";
            echo "<h3>Error:</h3>";
            echo "<p>No Existe Esta Persona, No esta registrada.</p>";
            echo "</div><br>";
            echo "<a href='../nuevaPersona.php'>Ir Formulario Persona</a><br>";
        } else {
            echo "<div>";
            echo "<h3>Error:</h3>";
            echo "<div>Datos No Ingresado.</div>";
            echo "</div><br>";
            echo "<a href='../NuevoAuto.php'>Ir Formulario Auto</a><br>";
        }
        ?>

    <br><a href="../../../../Menu.php">Volver Menu</a><br>

</body>

</html>