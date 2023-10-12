<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- puede haber mas de un bloque de codigo en php -->


  <?php
echo "este es el primer mensaje <br>";

// incluir codigo externo
include("proporciona_datos.php");
// require("proporciona_datos.php");

//llamado a la funcion
dameDatos();

echo "este es el segundo mensaje <br>";

dameDatos();
dameDatos();
dameDatos();
dameDatos();

  ?>
</body>
</html>