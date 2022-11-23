<?php
require_once("./ejercicios.php");
?>

<?php
$nombreErr = "Por favor escribe tu nombre. Solo se permiten letras y espacios en blanco";
$apellidosErr = "Por favor escribe tus apellidos. Solo se permiten letras y espacios en blanco";
$paisErr = "Por favor, seleccione un pais";
$preferenciasErr = "Por favor seleciona una preferencia";
$nombre = $apellidos = $pais = $pelicula = $cine = $libros = "";
$preferencias = array();


function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Convert array into string


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




  // Comprobacion -> Se ha seleccionado una opción¿?
  if (isset($_POST["pais"])) {
    // pais seleccionado -> Obtencion del valor de la opcion
    $pais = $_POST["pais"];
    // Visualizacion del pais seleccionado en función del valor devuelto.
    switch ($pais) {
      case 1: {
          echo "España";
        }
        ;
        break;
      case 2: {
          echo "Italia";
        }
        ;
        break;
      case 3: {
          echo "Francia";
        }
        ;
        break;
      case 4: {
          echo "Alemania";
        }
        ;
        break;
      case 5: {
          echo "Portugal";
        }
        ;
        break;
      case 6: {
          echo "Reino Unido";
        }
        ;
        break;
    }
  } else {
    // No se ha seleccionado ninguna opcion
    echo "$paisErr";
  }

  if (isset($_POST["preferencias"])) {
    $preferencias = array(); $preferencias = implode(", ", $preferencias); 
    $preferencias = $_POST["preferencias"];
    echo "Se han seleccionado " . count($preferencias) . " preferencias<br />";
    echo "<ul>";
    foreach ($preferencias as $preferencias) {
      echo "<li>" . $preferencias . "</li>";
    }
    echo "</ul>";
  } else {
    echo $preferenciasErr;
  }
}
