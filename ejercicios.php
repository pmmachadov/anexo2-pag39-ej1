<!-- ejercicios.php Muestra la tabla y la form. Si contiene HTML. -->

<!-- Crea una form con nombre, apellidos, un drop down menu con paises y checkboxes con preferencias: Teatro, libros y Cine. Un boton Enviar.
Al pulsar el botón “Enviar” el formulario deberá enviar los datos a la página
“datos.php” empleando el método POST. Diseña a continuación dicha página para que
muestre los valores introducidos por el usuario en cada uno de los campos, incluidos preferencias como un string.
Estos resultados deben ser mostrados en una tabla.
Usar: <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<span class="error"> <?php echo $librosErr; ?></span>
validar el formulario completamente.

-->

<!-- Color rojo a los errores style -->

<style>
    .error {
        color: #FF0000;
    }
</style>
<?php
require_once("./funlib.php");
?>

<table border="1" solid black>
    <tr>
        <td>Ejercicio</td>
        <td>anexo2-pag39-ej1</td>
    </tr>
    <table BORDER border="1" solid black>
        <br>
        <tr>
            <td>Nombre</td>
            <td>
                <?php echo $nombre; ?>
            </td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td>
                <?php echo $apellidos; ?>
            </td>
        </tr>
        <tr>
            <td>Pais</td>
            <td>
                <?php echo $pais; ?>
            </td>
        </tr>
        <tr>
            <td>Preferencias</td>
            <td><?php

// Convert array into string
echo $preferencias;

            ?> </td>
            </td>
        </tr>
    </table>
    <br>
    <p><span class="error">* required field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
    "funlib.php" ?>">
        Nombre: <input type="text" name="nombre">
        <span class="error">*
            <?php echo $nombreErr; ?>
        </span>
        <br><br>
        Apellidos: <input type="text" name="apellidos">
        <span class="error">*
            <?php echo $apellidosErr; ?>
        </span>
        <br><br>
        Pais: <select name="pais">
            <option value="España">España</option>
            <option value="Francia">Francia</option>
            <option value="Italia">Italia</option>
            <option value="Alemania">Alemania</option>
            <option value="Portugal">Portugal</option>
            <option value="Reino Unido">Reino Unido</option>
        </select>
        <span class="error">*
            <?php echo $paisErr; ?>
        </span>
        <br><br>
        <?php
        $preferencias
            ?>
        <input type="checkbox" name="preferencias[]" value="Teatro">Teatro <br>
        <input type="checkbox" name="preferencias[]" value="Libros">Libros <br>
        <input type="checkbox" name="preferencias[]" value="Cine">Cine <br>
        <span class="error">*
            <?php echo $preferenciasErr; ?>
        </span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</table>