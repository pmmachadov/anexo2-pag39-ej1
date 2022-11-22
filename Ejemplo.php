<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = ""; // Variables vacias

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Si el método de envío es POST
  $name = test_input($_POST["name"]); // Asigna a la variable $name el valor de la variable $_POST["name"]
  $email = test_input($_POST["email"]); // Asigna a la variable $email el valor de la variable $_POST["email"]
  $website = test_input($_POST["website"]); // Asigna a la variable $website el valor de la variable $_POST["website"]
  $comment = test_input($_POST["comment"]); // Asigna a la variable $comment el valor de la variable $_POST["comment"]
  $gender = test_input($_POST["gender"]); // Asigna a la variable $gender el valor
}

$nameErr = $emailErr = $genderErr = $websiteErr = ""; // Variables vacias
$name = $email = $gender = $comment = $website = ""; // Variables vacias

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Si el método de envío es POST
  if (empty($_POST["name"])) { // Si la variable $_POST["name"] está vacía
    $nameErr = "Name is required"; // Asigna a la variable $nameErr el valor "Name is required"
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  Name: <input type="text" name="name" value="<?php echo $name; ?>">
  E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
  Website: <input type="text" name="website" value="<?php echo $website; ?>">
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female")
  echo "checked"; ?>
  value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male")
  echo "checked"; ?>
  value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other")
  echo "checked"; ?>
  value="other">Other
  <input type="submit" name="submit" value="Submit">
</form>


<!-- 
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

    3 checkboxes con preferenicas: Teatro, Libros y Cine.
    Preferencias: <input type="checkbox" nombre="preferencias[]" value="Teatro">Teatro
    <input type="checkbox" nombre="preferencias[]" value="Libros">Libros
    <input type="checkbox" nombre="preferencias[]" value="Cine">Cine
    <span class="error">*
        <?php echo $preferenciasErr; ?>
    </span>
    <?php if (isset($preferencias)) {
        echo $preferencias;
    } ?>

    <br><br>

    <input type="submit" nombre="submit" value="Submit">
</form> -->
