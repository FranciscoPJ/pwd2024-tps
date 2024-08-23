<html>

    <head>
        <title>Total de Horas de Cursada</title>
    </head>
    
    <body>
        <h1>Total de Horas de Cursada por Semana</h1>

        <?php
        if ($_GET) {
            // Recibiendo las horas por cada día de la semana desde el formulario
            $horas = array(
                "Lunes" => $_GET['lunes'],
                "Martes" => $_GET['martes'],
                "Miércoles" => $_GET['miércoles'],
                "Jueves" => $_GET['jueves'],
                "Viernes" => $_GET['viernes'],
                "Sábado" => $_GET['sábado'],
                "Domingo" => $_GET['domingo']
            );

            // Calculando el total de horas de cursada por semana
            $totalHoras = 0;
            foreach ($horas as $dia => $hora) {
                $totalHoras += $hora;
            }

            // Mostrando el total de horas de cursada por semana
            echo "<p>La cantidad total de horas que se cursan por semana es: <strong>$totalHoras</strong> horas.</p>";
        } else {
            echo "<p>No se recibieron datos.</p>";
        }
        ?>

        <br>
        <a href="../vista/formulario.php">Volver al formulario</a>
    </body>
</html>
