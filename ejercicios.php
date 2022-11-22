<!-- ejercicios.php Muestra la tabla y la form. Si contiene HTML. -->

<!-- Crea una form con nombre, apellidos, un drop down menu con paises y checkboxes con preferencias: Teatro, Libros y Cine. Un boton Enviar.
Al pulsar el botón “Enviar” el formulario deberá enviar los datos a la página
“datos.php” empleando el método POST. Diseña a continuación dicha página para que
muestre los valores introducidos por el usuario en cada uno de los campos, incluidos preferencias como un string.
Estos resultados deben ser mostrados en una tabla.
Usar: <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<span class="error"> <?php echo $genderErr; ?></span>
validar el formulario completamente.

-->
<?php
require_once("./funlib.php");
?>
<form id="formulario" action="ejercicios.php" method="POST">
    <table>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
            <td><span class="error">
                    <?php echo $nombreErr; ?>
                </span></td>
        </tr>
        <tr>
            <td>Apellidos:</td>
            <td><input type="text" name="apellidos" value="<?php echo $apellidos; ?>"></td>
            <td><span class="error">
                    <?php echo $apellidosErr; ?>
                </span></td>
        </tr>
        <tr>
            <td>Pais:</td>
            <td>
                <select name="pais">
                    <option value="España">España</option>
                    <option value="Francia">Francia</option>
                    <option value="Italia">Italia</option>
                    <option value="Alemania">Alemania</option>
                    <option value="Portugal">Portugal</option>
                </select>
            </td>
            <td><span class="error">
                    <?php echo $paisErr; ?>
                </span></td>
            <?php if (isset($pais)) {
                echo "$pais";
            } ?>
            <td></td>
        </tr>
        <tr>
            <td>Preferencias:</td>
            <td>
                <input type="checkbox" name="preferencias[]" value="Teatro">Teatro<br>
                <input type="checkbox" name="preferencias[]" value="Libros">Libros<br>
                <input type="checkbox" name="preferencias[]" value="Cine">Cine<br>
            </td>
            <td><span class="error">
                    <?php echo $preferenciasErr; ?>
                </span></td>
            <?php if (isset($preferencias)) { echo "$preferencias"; } ?>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="enviar" value="Enviar"></td>
        </tr>

    </table>
</form>