<!-- Please follow these procedures and create a form con nombre, apellidos, un drop down menu con paises y checkboxes con preferencias: Teatro, Libros y Cine. Un boton Enviar.
Al pulsar el botón “Enviar” el formulario deberá enviar los datos a la página
“datos.php” empleando el método POST. Diseña a continuación dicha página para que
muestre los valores introducidos por el usuario en cada uno de los campos del
formulario.

Debes realizar:
validation with isset() and empty()
Usa htmlspecialchars().
Use the <form> tag to create an HTML form.
Use the $_GET or $_POST to access the form data. -->

<form action="data.php" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos">
    <br>
    <label for="pais">Pais</label>
    <select name="pais" id="pais">
        <option value="España">España</option>
        <option value="Francia">Francia</option>
        <option value="Alemania">Alemania</option>
        <option value="Italia">Italia</option>
        <option value="Portugal">Portugal</option>
        <option value="Grecia">Grecia</option>
        <option value="Irlanda">Irlanda</option>
        <option value="Holanda">Holanda</option>
    </select>
    <br>
    <label for="preferencias">Preferencias:<br></label>
    <input type="checkbox" name="preferencias[]" value="teatro" placeholder="#">Teatro<br>
    <input type="checkbox" name="preferencias[]" value="libros" placeholder="#">Libros<br>
    <input type="checkbox" name="preferencias[]" value="cine" placeholder="#">Cine<br>
    <br>
    <input type="submit" value="Enviar">
</form>

<hr>

<?php

// validation with isset() and empty()

if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
} else {
    $nombre = 'No has introducido tu nombre';
}

if (isset($_POST['apellidos']) && !empty($_POST['apellidos'])) {
    $apellidos = $_POST['apellidos'];
} else {
    $apellidos = 'No has introducido tus apellidos';
}

if (isset($_POST['pais']) && !empty($_POST['pais'])) {
    $pais = $_POST['pais'];
} else {
    $pais = 'No has introducido tu pais';
}

if (isset($_POST['preferencias']) && !empty($_POST['preferencias'])) {
    $preferencias = $_POST['preferencias'];
} else {
    $preferencias = 'No has introducido tus preferencias';
}

// Use empty() to check if the form has been submitted

if (!empty($_POST)) {
    echo 'Nombre: ' . htmlspecialchars($nombre) . '<br>';
    echo 'Apellidos: ' . htmlspecialchars($apellidos) . '<br>';
    echo 'Pais: ' . htmlspecialchars($pais) . '<br>';
    echo 'Preferencias: ' . htmlspecialchars(implode(", ", $preferencias)) . '<br>'; // implode() converts an array to a string
} else {
    echo 'No has enviado nada';
}
