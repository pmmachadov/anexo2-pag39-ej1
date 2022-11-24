<!-- ejercicios.php Muestra la tabla y la form. Si contiene HTML. -->

<!-- Crea una form con nombre, apellidos, un drop down menu con paises y checkboxes con preferencias: Teatro, libros y Cine. Un boton Enviar.
Al pulsar el botón “Enviar” el formulario deberá enviar los datos a la página
“datos.php” empleando el método POST. Diseña a continuación dicha página para que
muestre los valores introducidos por el usuario en cada uno de los campos, incluidos preferencias como un string.
Estos resultados deben ser mostrados en una tabla.
Usar: <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<span class="error"> <?php echo $librosErr; ?></span>
validar el formulario completamente.

-->