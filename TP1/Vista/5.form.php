<?php
include_once "Estructura/Header.php";
?>
<!-- Ejercicio 5 
            Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons”:
                
            se ingrese el nivel de estudio de la persona: 
            1-no tiene estudios, 
            2-estudios primarios, 
            3-estudios secundarios. 
            
            Agregar el componente que crea más apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además un mensaje que indique el tipo de estudios que posee y su sexo.-->

        <h1>Ejercicio 5</h1>
        <form action="Action/5.action5.php" method="GET" onsubmit="return validar();">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
            <br>
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido">
            <br>
            <label for="edad">Edad</label>
            <input type="number" id="edad" name="edad">
            <br>
            <label for="direccion">Direccion</label>
            <input type="text" id="direccion" name="direccion">
            <br><br>
            <label>Nivel de Estudios:</label><br>
            <label for="no_estudios">No Tiene Estudios</label>
            <input type="radio" id="estudio" name="estudio" value="1"><br>
            <label for="primarios">Estudios Primarios</label>
            <input type="radio" id="estudio" name="estudio" value="2"><br>
            <label for="secundarios">Estudios Secundarios</label>
            <input type="radio" id="estudio" name="estudio" value="3"><br>
            <br>
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo">
                <option value=""></option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
            <br><br>
            <input type="submit" value="Enviar">
        </form>
        <!-- js -->
        <script type="text/javascript" src="Assets/js/5.personaDatos.js"></script>
<?php
include_once "Estructura/Footer.php";
?>