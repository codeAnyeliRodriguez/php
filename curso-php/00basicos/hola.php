<?php
//comentario de un sola linea
/* Esto es 
un comentatio
multilinea */

#echo("Hola mundo");
// imprimir en pantalla
echo"Hola mundo";
echo "<br/>hola cruel mundo <br /> estoy <h1>aprendiendo php</h1>";
//variables
$nombre="Anyeli";
$Nombre="Beatriz";

// concatenacion de cadenas y variables
echo $nombre."&nbsp;".$Nombre;
echo"<br/>";
$num1=5;
$num2=77;

$suma = $num1 + $num2;
echo $suma;
// escapar
echo"<br/>La variable \$suma tiene el valor de $suma";

$modulo = $num2 % 2;
echo"<br/>";
if($modulo == 0){
  echo "El n&uacute;mero es par";
}else{
  echo"El n&uacute;mero es inpar";
}
echo"<br/>";

for($i=0;$i<=10;$i++){
  echo $i."<br/>";
}
?>