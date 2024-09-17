<?php
include_once "../configuracion.php";
$objAbmPersona = new AbmPersona();
$listaPersonas = $objAbmPersona->darArray(null);
include_once "Estructura/Header.php";

?>

<h3 class="text-center my-4">Ejercicio 5: Lista de Personas</h3>
<div class="container">

    <table class="table table-bordered table-striped table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th> DNI </th>
                <th> Apellido </th>
                <th> Nombre </th>
                <th> Fecha de Nacimiento </th>
                <th> Telefono </th>
                <th> Domicilio </th>
                <th> Link </th>

            </tr>

        </thead>
        <tbody>
            <?php
            if (count($listaPersonas) > 0) {


                foreach ($listaPersonas as $personaArray) {

                    echo '<tr><td style="width:100px;">' . $personaArray['NroDni'] . '</td>';
                    echo '<td style="width:100px;">' . $personaArray['Apellido'] . '</td>';
                    echo '<td style="width:100px;">' . $personaArray['Nombre'] . '</td>';
                    echo '<td style="width:100px;">' . $personaArray['fechaNac'] . '</td>';
                    echo '<td style="width:100px;">' . $personaArray['Telefono'] . '</td>';
                    echo '<td style="width:100px;" align="center">' . $personaArray['Domicilio'] . '</td>';
                    echo '<td style="width:100px;" align="center"><a href="Action/autosPersona.php?NroDni=' . $personaArray['NroDni'] . '">Ver Auto</a></td></tr>';
                }
            } else {
                echo '<tr><td colspan="7">No Hay Personas Cargadas En El Sistema.</td></tr>';
            }
            ?>
        </tbody>
    </table>

</div>
<?php
include_once "Estructura/Footer.php";
?>








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