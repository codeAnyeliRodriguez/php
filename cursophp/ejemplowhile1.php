<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$var1=1;
// while($var1<6){
  do{
  echo "Estamos ejecutando el codigo del bucle <br>";
  $var1++;//sin esta linea podria convertirse en un bucle infinito
}while($var1<6);
echo 'hemos salido del bucle';
?>
</body>
</html>