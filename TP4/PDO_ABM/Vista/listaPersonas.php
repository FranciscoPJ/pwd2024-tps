<?php
include_once "../configuracion.php";
$objAbmPersona = new AbmPersona();
$listaPersonas = $objAbmPersona->buscar(null);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista personas</title>
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
        <h3 class="text-center my-4">Ejercicio 5 - Lista de Personas</h3>
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


                        foreach ($listaPersonas as $objPersona) {

                            echo '<tr><td style="width:100px;">' . $objPersona->getNroDni() . '</td>';
                            echo '<td style="width:100px;">' . $objPersona->getApellido() . '</td>';
                            echo '<td style="width:100px;">' . $objPersona->getNombre() . '</td>';
                            echo '<td style="width:100px;">' . $objPersona->getFechaNac() . '</td>';
                            echo '<td style="width:100px;">' . $objPersona->getTelefono() . '</td>';
                            echo '<td style="width:100px;" align="center">' . $objPersona->getDomicilio() . '</td>';
                            echo '<td style="width:100px;" align="center"><a href="Action/autosPersona.php?NroDni=' . $objPersona->getNroDni() . '">Ver Auto</a></td></tr>';
                        }
                    } else {
                        echo '<tr><td colspan="5">No hay personas cargados</td></tr>';
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