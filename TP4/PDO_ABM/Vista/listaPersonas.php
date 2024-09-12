<?php
include_once "../configuracion.php";

$objAbmPersona = new AbmPersona();
$listaPersonas = $objAbmPersona->buscar(null);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Lista Persona</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <h3 align="center">Ejercicio 5 - Lista de Personas</h3>
    <table border="1" align="center">
    <?php	
    if(count($listaPersonas) > 0){
            echo "<tr>";
            echo "<th>DNI</th>";
            echo "<th>Apellido</th>";
            echo "<th>Nombre</th>";
            echo "<th>Fecha de Nacimiento</th>";
            echo "<th>Telefono</th>";
            echo "<th>Domicilio</th>";
            echo "<th>Link</th>";
            echo "</tr>";

        foreach ($listaPersonas as $objPersona) { 
            
            echo '<tr><td style="width:100px;">'.$objPersona->getNroDni().'</td>';
            echo '<td style="width:100px;">'.$objPersona->getApellido().'</td>';
            echo '<td style="width:100px;">'.$objPersona->getNombre().'</td>';
            echo '<td style="width:100px;">'.$objPersona->getFechaNac().'</td>';
            echo '<td style="width:100px;">'.$objPersona->getTelefono().'</td>';
            echo '<td style="width:100px;" align="center">' .$objPersona->getDomicilio() .'</td>';
            echo '<td style="width:100px;" align="center"><a href="Action/autosPersona.php?NroDni=' . $objPersona->getNroDni() . '">Ver Auto</a></td></tr>'; 

            
        }

    } else {
        echo "<div>no hay personas cargadas</div>";
    }
    ?>
    </table>

    <!-- Si deseas pasar un valor a otra página, como el DNI de una persona, deberías hacerlo usando la URL de la siguiente manera:
        
    "<a href="autosPersona.php?dni=123">Ver autos</a>"

    Explicación:
href="autosPersona.php?dni=123": Aquí estás enviando el valor 123 para el parámetro dni a la página autosPersona.php usando el método GET.

En la página autosPersona.php, puedes acceder al valor de dni utilizando PHP de la siguiente manera:

if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];
    // Ahora puedes usar $dni en la lógica de tu código
}
    -->

</body>
</html>