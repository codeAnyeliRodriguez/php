<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .resaltar{
      color:red;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <?php

// echo "<p class=\"resaltar\"> Esto es un ejemplo de frase </p>"

/* $nombre = 'Anyeli';
echo "Hola $nombre"; */
$variable1 = 'Casa';
$variable2 = 'CASA';

// strcmp :presta atencion a las mayusculas
$resultado = strcmp($variable1, $variable2);//devuelve 1 si no son iguales. 0 si son iguales.

// strcasecmp :ignora las mayusculas
// $resultado = strcasecmp($variable1, $variable2);//devuelve 1 si no son iguales. 0 si son iguales.

// echo "el resultado es: $resultado";
/* if($resultado){
  echo 'No coinciden';
}else{
  echo 'Coinciden';
} */

if(!$resultado){
  echo 'coinciden';
}else{
  echo 'no coinciden';
}

?>
</body>
</html>