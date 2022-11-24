<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.php">
    <title>anexo2-pag39-ej1</title>
</head>

<body>
    <?php
    require_once("./funlib.php");
    ?>
    <table border="1" solid black>
        <tr>
            <td>Ejercicio</td>
            <td>anexo2-pag39-ej1</td>
        </tr>
        <td></td>
        <td></td>
        </tr>
    </table>
    <p><span class="error">* required field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
"funlib.php" ?>">
        Nombre: <input type="text" name="nombre">
        <span class="error">*
        </span>
        <br><br>
        Apellidos: <input type="text" name="apellidos">
        <span class="error">*
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
        </span>
        <br><br>
        <input type="checkbox" name="preferencias[]" value="Teatro">Teatro <br>
        <input type="checkbox" name="preferencias[]" value="Libros">Libros <br>
        <input type="checkbox" name="preferencias[]" value="Cine">Cine <br>
        <span class="error">*
        </span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </table>
</body>

</html>