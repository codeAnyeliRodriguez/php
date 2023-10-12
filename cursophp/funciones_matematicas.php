<?php
#funciones matematicas php
  // $num1 = rand(10,50);
  // $num1 = pow(5,3);
  
/* $num1 = 5.7556454;
  echo 'el numero es: '. round($num1,2); */

#php tiene un casting implicito
/* $num1 ='5';//string
$num1+=2;//int
$num1+5.75;//float
echo 'el numero es: '. $num1; */

$num1 = '5';
$resultado = (int)$num1;//casting explicto num pasa a ser de tipo entero.
?>