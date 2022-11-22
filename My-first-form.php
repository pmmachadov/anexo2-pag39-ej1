<!-- ejercicios.php Muestra la tabla y la form. Si contiene HTML. -->

<!-- Crea una form con nombre, apellidos, un drop down menu con paises y checkboxes con preferencias: Teatro, Libros y Cine.

// Un boton Enviar.
// Al pulsar el botón “Enviar” el formulario deberá enviar los datos a la página
// “datos.php” empleando el método POST.

// Diseña a continuación dicha página para que
// muestre los valores introducidos por el usuario en cada uno de los campos, incluidos preferencias como un string.
// Estos resultados deben ser mostrados en una tabla.
// Usar: <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
// <span class="error"> <?php echo $genderErr; ?></span>
// validar el formulario completamente.

-->

<?php


$nombreErr = $apellidosErr = $paisErr = $preferenciasErr = "";
$nombre = $apellidos = $pais = $preferencias = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre"])) {
        $nombreErr = "Nombre es requerido";
    } else {
        $nombre = test_input($_POST["nombre"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $nombre)) {
            $nombreErr = "Solo letras y espacios en blanco permitidos";
        }
    }

    if (empty($_POST["apellidos"])) {
        $apellidosErr = "Apellidos es requerido";
    } else {
        $apellidos = test_input($_POST["apellidos"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $apellidos)) {
            $apellidosErr = "Solo letras y espacios en blanco permitidos";
        }
    }

    if (empty($_POST["pais"])) {
        $paisErr = "Pais es requerido";
    } else {
        $pais = test_input($_POST["pais"]);
    }

    if (empty($_POST["preferencias"])) {
        $preferenciasErr = "Preferencias es requerido";
    } else {
        $preferencias = test_input($_POST["preferencias"]);
    }
}



function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo $nombre . " " . $apellidos . " " . $pais . " " . $preferencias;

?>




<!DOCTYPE HTML>
<html lang="es">

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body></body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nombre: <input type="text" nombre="nombre">
    <span class="error">*
        <?php echo $nombreErr; ?>
    </span>
        <br><br>
    Apellidos: <input type="text" nombre="apellidos">
    <span class="error">*
        <?php echo $apellidosErr; ?>
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

    <!-- 3 checkboxes con preferenicas: Teatro, Libros y Cine. -->
    Preferencias: <input type="checkbox" name="preferencias[]" <?php if (isset($preferencias))?> value="Teatro">Teatro
    <input type="checkbox" name="preferencias[]" <?php if (isset($preferencias))?> value="Libros">Libros
    <input type="checkbox" name="preferencias[]" <?php if (isset($preferencias))?> value="Cine">Cine
    <span class="error">*
        <?php echo $preferenciasErr; ?>
    </span>
    <?php if (isset($preferencias)) {
        echo $preferencias;
    } ?>
    <br><br>
    <input type="submit" nombre="submit" value="Submit">
</form>





