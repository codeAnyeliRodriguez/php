<?php
#metodo 1: utilizando str_replace
  /*function eliminarvocales($cadena){
    $vocales = array('a','e','i','o','u');
    return str_replace($vocales, '', $cadena);
  }
$cadenaOriginal = "Hola, este es un ejemplo de eliminación de vocales!";
$cadenaSinVocales = eliminarVocales($cadenaOriginal);
echo $cadenaSinVocales . "\n";*/

#metodo 2: utilizando preg_replace
function eliminarVocalesRegex($cadena) {
    return preg_replace('/[aeiou]/', '', $cadena);
}
$cadenaOriginal = "Hola, este es un ejemplo de eliminación de vocales!";
$cadenaSinVocalesRegex = eliminarVocalesRegex($cadenaOriginal);
echo $cadenaSinVocalesRegex . "\n";
?>