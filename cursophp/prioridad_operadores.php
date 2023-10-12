<?php
#operadores logicos
#doc:   operadores logicos php
/* 
&&    y logico
AND   y logico
||    o logico
OR    o logico
XOR   o exclusivo
!     negacion(NOT)
*/

$var1 = true;
$var2 = false;

$resulado = $var1 && $var2;//resultado = false
// $resulado = $var1 AND $var2;//resultado = true

if($resulado == true){
  echo 'correcto';
}else{
  echo 'incorrecto';
}

?>