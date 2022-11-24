<?php
$nombreErr = "Por favor escribe tu nombre. Solo se permiten letras y espacios en blanco" . "<br>";
$apellidosErr = "Por favor escribe tus apellidos. Solo se permiten letras y espacios en blanco" . "<br>";
$paisErr = "Por favor, seleccione al menos un pais" . "<br>";
$preferenciasErr = "Por favor seleciona al menos una preferencia" . "<br>";
$nombre = $apellidos = $pais = $pelicula = $cine = $libros = "";
$preferencias = array();
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"]) || !preg_match("/^[a-zA-Z ]*$/", $_POST["nombre"]) || (!isset($_POST['nombre']))) {  
    echo $nombreErr;
  } else {
    $nombre = test_input($_POST["nombre"]);
  }
  if (empty($_POST["apellidos"]) || !preg_match("/^[a-zA-Z ]*$/", $_POST["apellidos"]) || (!isset($_POST['apellidos']))) {
    echo $apellidosErr;
  } else {
    $apellidos = test_input($_POST["apellidos"]);
  }
  if (empty($_POST["pais"]) || (!isset($_POST['pais']))) {
    echo $paisErr;
  } else {
    $pais = test_input($_POST["pais"]);
  }
  if (empty($_POST["preferencias"]) || (!isset($_POST['preferencias']))) {
    echo $preferenciasErr;
  } else {
    $preferencias = $_POST["preferencias"];
    if (isset($_POST["preferencias"])) {
      $preferencias = [];
    }
    foreach ($_POST["preferencias"] as $preferencia) {
      $preferencias[] = $preferencia;
    }
  }

  if (isset($_POST["submit"])) {
    echo "Nombre: " . $nombre . "<br>";
    echo "Apellidos: " . $apellidos . "<br>";
    echo "Pais: " . $pais . "<br>";
    echo "Preferencias: " . "<br>";
    foreach ($preferencias as $preferencia) {
      echo $preferencia . "<br>";
    }
  }
}
?>