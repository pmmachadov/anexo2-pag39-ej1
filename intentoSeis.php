<!DOCTYPE HTML>

<html>

<head>

    <style>
        .error {
            color: #FF0000;
        }
    </style>

</head>

<body>

    <?php
    $nombreErr = $apellidosErr = $paisErr = $preferenciasErr = "";
    $nombre = $apellidos = $pais = $preferencias = "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

$preferencias = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nombre"])) {
            $nombreErr = "Nombre es requerido";
        } else {
            $nombre = test_input($_POST["nombre"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $nombre)) {
                $nombreErr = "Solo se permiten letras y espacios en blanco";
            }
        }

        if (empty($_POST["apellidos"])) {
            $apellidosErr = "Apellidos es requerido";
        } else {
            $apellidos = test_input($_POST["apellidos"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $apellidos)) {
                $apellidosErr = "Solo se permiten letras y espacios en blanco";
            }
        }

        if (empty($_POST["pais"])) {
            $paisErr = "Pais es requerido";
        } else {
            $pais = test_input($_POST["pais"]);
        }

        if (isset($_POST['submit'])) { //to run PHP script on submit
            if (!empty($_POST['preferencias'])) {
                // Loop to store and display values of individual checked checkbox.
                foreach ($_POST['preferencias'] as $selected) {
                    echo $selected . "</br>";
                }
            }
        }
    }

    echo "<table border='1'>";  // Add .tableData to this table to use CSS
    

  
    echo "<tr><td>Variable</td><td>Value</td></tr>";
    foreach ($GLOBALS as $key => $value) {
        echo "<tr><td>$key</td><td>";
        var_dump($value);
        echo "</td></tr>";
    }
    echo "</table>";
    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="nombre">
        <span class="error">*
            <?php echo $nombreErr;?>
        </span>
        <br><br>
        Surname: <input type="text" name="apellidos">
        <span class="error">*
            <?php echo $apellidosErr;?>
        </span>
        <br><br>
        Pais: <select nombre="pais">
            <option value="España">España</option>
            <option value="Francia">Francia</option>
            <option value="Italia">Italia</option>
            <option value="Alemania">Alemania</option>
            <option value="Portugal">Portugal</option>
            <option value="Reino Unido">Reino Unido</option>
            <option value="Otro">Otro</option>
        </select>
        <span class="error">*
            <?php echo $paisErr; ?>
        </span>
        <br><br>
        Preferencias: <input type="checkbox" name="preferencias[]" <?php if (isset($preferencias))?>
        value="Teatro">Teatro
        <span class="error">*
            <?php echo $preferenciasErr; ?>
        </span>
        <?php
if (isset($_POST['preferencias']) && $_POST['preferencias'] == 'Teatro') { echo 'checked="checked"';}
?>
        <input type="checkbox" name="preferencias[]" <?php if (isset($preferencias))?> value="Libros">Libros
        <span class="error">*
            <?php echo $preferenciasErr; ?>
        </span>
        <?php
if (isset($_POST['preferencias']) && $_POST['preferencias'] == 'Libros') { echo 'checked="checked"';}
?>
        <input type="checkbox" name="preferencias[]" <?php if (isset($preferencias))?> value="Cine">Cine
        <!-- Add curly braces around the nested statement(s). Example: if (isset($preferencias)) { ?> -->
        <span class="error">*
            <?php echo $preferenciasErr; ?>
        </span>
        <?php
if (isset($_POST['preferencias']) && $_POST['preferencias'] == 'Cine') { echo 'checked="checked"';}
?>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    echo $nombre;
    echo $apellidos;
    echo $pais;
    // convert to string
    $preferencias = implode(', ', $preferencias);
    echo $preferencias;
    ?>

    <!-- El error que te sale es de la funcion , que si te fijas tu le pasas un ARRAY, cuando requiere una cadena , ahí esta el error, haz un var_dump de $_POST para verlo…. -->
</body>

</html>