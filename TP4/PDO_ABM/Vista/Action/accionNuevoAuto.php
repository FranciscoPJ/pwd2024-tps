<?php
include_once '../../configuracion.php';

$datos = data_submitted();
//print_r($datos);

$objAbmPersona = new AbmPersona();
$objAbmAuto = new AbmAuto();


$resp = false;
if (isset($datos['accion'])) {

    if ($datos['accion'] == 'nuevo') {

        if ($objAbmPersona->existePersona(["NroDni" => $datos['DniDuenio']])) { //si  existe el objeto persona, agregar persona

            $objPersona = $objAbmPersona->buscar(["NroDni" => $datos['DniDuenio']]); // obtengo el objeto
            $datos['DniDuenio'] = $objPersona; //funciono

            if (!$objAbmAuto->existeAuto(["Patente" => $datos['Patente']])) { // //si no existe el objeto auto, agrega auto

                if ($objAbmAuto->alta($datos)) { // agrega el objeto auto a la BD

                    $resp = true;
                }
            }
        } else { //sino (si no existe la persona, entonces le agrego el auto) 

            echo "<div>No existe esta persona</div>";

        } //fin else 

    } // fin de pregunat accion "nuevo" 
}


?>

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <title>Nueva Persona</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
        <?php
        if ($resp) {
            echo "<h3>Nueva Persona</h3><br>";
            echo "<div>La accion " . $datos['accion'] . " se realizo correctamente.</div>";
        } else {
            echo "<div>La accion " . $datos['accion'] . " no pudo concretarse.</div>";
            echo "<a href='../nuevaPersona.php'>Cargar Nueva Persona</a><br>";
        }
        ?>

    <br><a href="../nuevoAuto.php">Volver</a><br>

</body>

</html>