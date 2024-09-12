<?php
include_once '../../configuracion.php';

$datos = data_submitted();
//verEstructura($datos);
    
$abmPersona = new AbmPersona();
$objPersona = $abmPersona->buscar($datos);
//verEstructura($objPersona);
?>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>accionBuscarPersona</title>
    </head>

    <body>
        <?php
            if ($objPersona) {
                // Mostrar un formulario con los datos de la persona
                echo '<form action="ActualizarDatosPersona.php" method="POST" align="center">';
                echo '<input type="hidden" id="NroDni" name="NroDni" value="' . $objPersona[0]->getNroDni() . '">';
                echo '<label for="nombre">Apellido:</label><br>';
                echo '<input type="text" id="Apellido" name="Apellido" value="' . $objPersona[0]->getApellido() . '"><br>';
        
                echo '<label for="Nombre">Nombre:</label><br>';
                echo '<input type="text" id="Nombre" name="Nombre" value="' . $objPersona[0]->getNombre() . '"><br>';
        
                echo '<label for="fechaNac">Fecha de Nacimiento:</label><br>';
                echo '<input type="text" id="fechaNac" placeholder="anio-mes-dia" name="fechaNac" value="' . $objPersona[0]->getFechaNac() . '"><br>';
        
                echo '<label for="Telefono">Telefono:</label><br>';
                echo '<input type="text" id="Telefono" name="Telefono" value="' . $objPersona[0]->getTelefono() . '"><br>';
        
                echo '<label for="Domicilio">Domicilio:</label><br>';
                echo '<input type="text" id="Domicilio" name="Domicilio" value="' . $objPersona[0]->getDomicilio() . '"><br><br>';
                
                echo '<input id="accion" name ="accion" value="editar" type="hidden">';
                echo '<input type="submit" value="Actualizar">';
        
                echo '</form>';
            } else {
                echo '<div>Persona no encontrada.</div><br> <a href="../buscarPersona.php">Volver</a>';
            }
        ?>
    </body>

</html>
