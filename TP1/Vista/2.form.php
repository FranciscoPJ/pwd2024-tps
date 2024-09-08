    <?php
    include_once "Estructura/Header.php";
    ?>
        
    <!-- Ejercicio 2
        Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana. Enviar los datos del formulario por el metodo Get a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana. -->
        <h1>Ejercicio 2</h1>
        <form action="Action/2.action2.php" method="GET" onsubmit="return validar();">
            <label for="lunes">Lunes</label>
            <input type="number" id="lunes" name="lunes">
            <br>
            <label for="lunes">Martes</label>
            <input type="number" id="martes" name="martes">
            <br>
            <label for="lunes">Miercoles</label>
            <input type="number" id="miercoles" name="miercoles">
            <br>
            <label for="lunes">Jueves</label>
            <input type="number" id="jueves" name="jueves">
            <br>
            <label for="lunes">Viernes</label>
            <input type="number" id="viernes" name="viernes">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
        <!-- aca iria el js -->
        <script type="text/javascript" src="Assets/js/2.numeroDias.js"></script>
<?php
    include_once "Estructura/Footer.php";
?>