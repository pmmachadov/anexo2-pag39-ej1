<?php
declare(strict_types=1); // strict requirement
//funlib.php es el fichero para las funciones. No contiene HTML

// Funcion que define variables and set to empty values
$nombre = $apellidos = $pais = $preferencias = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = test_input($_POST["nombre"]); // Fatal error: Uncaught Error: Call to undefined function test_input() Solution: require_once("./ejercicios.php");
        $apellidos = test_input($_POST["apellidos"]);
        $pais = test_input($_POST["pais"]);
        $preferencias = test_input($_POST["preferencias"]);
        function test_input() // Funcion que limpia los datos de entrada
        
        $nombre = test_input($_POST["nombre"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$nombre)) {
          $nombreErr = "Only letters and white space allowed";
        }
        $apellidos = test_input($_POST["apellidos"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$apellidos)) {
          $apellidosErr = "Only letters and white space allowed";
        }
        if empty ($_POST["pais"]) {
            $paisErr = "Pais is required";
        } else {
            $pais = test_input($_POST["pais"]);
        }
        if (empty($_POST["preferencias"])) {
            $preferenciasErr = "Preferencias is required";
        } else {
            $preferencias = test_input($_POST["preferencias"]);
        }

// Notice that at the start of the script, we check whether the form has been submitted using $_SERVER["REQUEST_METHOD"]. If the REQUEST_METHOD is POST, then the form has been submitted - and it should be validated. If it has not been submitted, skip the validation and display a blank form. However, in the example above, all input fields are optional. The script works fine even if the user does not enter any data.

// define variables and set to empty values
$nombreErr = $apellidosErr = $paisErr = $preferenciasErr = "";
$nombre = $apellidos = $pais = $preferencias = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    $nombreErr = "nombre is required";
  } else {
    $nombre = test_input($_POST["nombre"]);
    // check if nombre only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nombre)) {
      $nombreErr = "Only letters and white space allowed";
    }
  }

    if (empty($_POST["apellidos"])) {
        $apellidosErr = "apellidos is required";
    } else {
        $apellidos = test_input($_POST["apellidos"]);
        // check if apellidos only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $apellidos)) {
        $apellidosErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["pais"])) {
        $paisErr = "pais is required";
    } else {
        $pais = test_input($_POST["pais"]);
    
    }
}

if (empty ($_POST["preferencias"])) {
    $preferenciasErr = "preferencias is required";
} else {
    $preferencias = test_input($_POST["preferencias"]);
}

echo $nombre;
echo $apellidos;
echo $pais;
echo $preferencias;