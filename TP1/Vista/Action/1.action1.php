<?php
include_once "../../Control/Numero.php";
include_once "../../Utils/funciones.php";
$numero = darDatosSubmitted();
$signo = new Numero();
$mensaje = $signo->darsigno($numero);
?>

<?php
include_once "../Estructura/Header.php";
echo "<div>" . $mensaje . "</div>";
include_once "../Estructura/Footer.php";
?>