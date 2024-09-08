<?php 
    include_once "Estructura/Header.php";
?>
<!-- Ejercicio 3 – 
    Agregue al formulario creado en el ejercicio 4 del práctico 2 un input file que 
    
    les permita adjuntar la imagen de película que se está cargando. 
    
    Cuando se envía el formulario se deberá guardar la imagen 
    
    y luego mostrarla junto con la información cargada en el formulario. -->

    <div class="container mt-18 border" style="border: 1px solid #d3d3d3; box-shadow: 0.5rem 1rem rgba(0, 0, 0, .15);">
    <div class="d-flex  w-100 m-0 color:3991ac" style="background-color:rgb(237,237,237)">
        <i class="bi bi-pencil-square"></i>
        <h1 class="f-1 text-primary">Cinem@s</h1>
    </div>

    <form id="peliculaForm" action="Action/3.actionCinemas.php" method="post" class="mt-3 p-1" onsubmit="return validar();" enctype="multipart/form-data">

        <table class="w-100 ">
            <tr>
                <td class="w-50">
                    <div class="mb-4 mx-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" id="titulo" name="titulo" class="form-control">
                        <div class="invalid-feedback">Por favor, ingrese un título válido: solo letras seguidas opcionalmente por números.</div>
                    </div>
                </td>
                <td>
                    <div class="mb-4 mx-3">
                        <label for="actores" class="form-label">Actores</label>
                        <input type="text" id="actores" name="actores" class="form-control">
                        <div class="invalid-feedback">Por favor, ingrese solo letras en el campo Actores.</div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="mb-4 mx-3">
                        <label for="director" class="form-label">Director</label>
                        <input type="text" id="director" name="director" class="form-control">
                        <div class="invalid-feedback">Por favor, ingrese solo letras en el campo Director.</div>
                    </div>
                </td>
                <td>
                    <div class="mb-4 mx-3">
                        <label for="guion" class="form-label">Guion</label>
                        <input type="text" id="guion" name="guion" class="form-control">
                        <div class="invalid-feedback">Por favor, ingrese solo letras seguidas opcionalmente por números en el campo Guion.</div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="mb-4 mx-3">
                        <label for="produccion" class="form-label">Producción</label>
                        <input type="text" id="produccion" name="produccion" class="form-control">
                        <div class="invalid-feedback">Por favor, ingrese solo letras seguidas opcionalmente por números en el campo Producción.</div>
                    </div>
                </td>
                <td>
                    <div class="mb-4 mx-3">
                        <label for="anio" class="form-label">Año</label>
                        <input type="text" id="anio" name="anio" class="form-control" maxlength="4">
                        <div class="invalid-feedback">Por favor, ingrese un año válido entre 1895 y 2030.</div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="mb-4 mx-3">
                        <label for="nacionalidad" class="form-label">Nacionalidad</label>
                        <input type="text" id="nacionalidad" name="nacionalidad" class="form-control">
                        <div class="invalid-feedback">Por favor, ingrese solo letras en el campo Nacionalidad.</div>
                    </div>
                </td>
                <td>
                    <div class="mb-4 mx-3">
                        <label for="genero" class="form-label">Género</label>
                        <select id="genero" name="genero" class="form-select">
                            <option value="">Seleccione un género</option>
                            <option value="Comedia">Comedia</option>
                            <option value="Drama">Drama</option>
                            <option value="Terror">Terror</option>
                            <option value="Románticas">Románticas</option>
                            <option value="Suspenso">Suspenso</option>
                            <option value="Otras">Otras</option>
                        </select>
                        <div class="invalid-feedback">Seleccione un género.</div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="mb-4 mx-3">
                        <label for="duracion" class="form-label">Duración</label>
                        <input type="text" id="duracion" name="duracion" class="form-control" maxlength="3">(minutos)
                        <div class="invalid-feedback">Por favor, ingrese una duración válida de hasta 3 dígitos.</div>
                    </div>
                </td>
                <td>
                    <label for="restricciones" class="form-label">Restricciones de edad</label><br>
                    <input type="radio" id="restricciones" name="restricciones" value="1"> Todos los Públicos
                    <input type="radio" id="restricciones" name="restricciones" value="2"> Mayores de 7 años
                    <input type="radio" id="restricciones" name="restricciones" value="3"> Mayores de 18 años
                    <div class="invalid-feedback">Seleccione una restricción de edad.</div>
                </td>
            </tr>

            <tr>
                <td colspan="2">Sinopsis<br>
                    <textarea name="mensajeTarea" id="mensaje" cols="50" rows="6" class="form-control"></textarea>
                    <div class="invalid-feedback">Ingrese una sinopsis.</div>
                </td>
            </tr>
            
            <!-- Campo de archivo -->
            <tr>
                <td>
                    <div class="mb-4 mx-3">
                        <br>
                        <!-- <label for="miArchivo" class="form-label">Ingrese el archivo</label> -->
                        <input type="file" id="miArchivo" name="miArchivo" class="form-control">
                        <div class="invalid-feedback">Por favor, seleccione una imagen válida (jpg, jpeg, png, gif).</div>
                    </div>
                </td>
            </tr>

            <!-- Botones -->
            <tr>
                <td colspan="2">
                    <div class="mx-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mx-1">Enviar</button>
                        <button type="button" id="borrar" class="btn btn-secondary mx-1">Borrar</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
    <script src="Assets/js/3.CinemasDos.js"></script>
<?php 
    include_once "Estructura/Footer.php";
?>