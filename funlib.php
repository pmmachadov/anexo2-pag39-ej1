<?php
require_once("./ejercicios.php");

?>

<?php
$nombreErr = "Por favor escribe tu nombre. Solo se permiten letras y espacios en blanco";
$apellidosErr = "Por favor escribe tus apellidos. Solo se permiten letras y espacios en blanco";
$paisErr = "Por favor, seleccione un pais";
$preferenciasErr = "Por favor seleciona una preferencia";
$nombre = $apellidos = $pais = $preferencias = $pelicula = $cine = $libros = "";

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$preferencias = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    echo $nombreErr;
  } else {
    $nombre = test_input($_POST["nombre"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $nombre)) {
      echo $nombreErr;
    }
  }

  if (empty($_POST["apellidos"])) {
    echo $apellidosErr;
  } else {
    $apellidos = test_input($_POST["apellidos"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $apellidos)) {
      echo $apellidosErr;
    }
  }
  if (isset($_POST['submit'])) {
    if (!empty($_POST['pais'])) {
      foreach ($_POST['pais'] as $selected) {
        echo '  ' . $selected;
      }
    } else {
      echo $preferenciasErr;
    }
  }






}