<style>
  .resultado{
    color:red;
    font-weight: bold;
    font-size: 32px;
  }
</style>
<?php

#Operadores Matematicos
/* 
+   suma
-   resta
*   multiplicacion
/   division
%   modulo
++ +=   incremento
-- -=   decremento
*/

function calcular($calculo){

  if(!strcmp("suma", $calculo)){
global $numero1;
global $numero2;

    $resultado = $numero1+$numero2;

    echo "<p class='resultado'>El resultado es: $resultado</p>";

  } if(!strcmp("resta", $calculo)){
global $numero1;
global $numero2;

$resultado = $numero1-$numero2;

    echo "<p class='resultado'> El resultado es: $resultado</p>";

  } if(!strcmp("multiplicacion", $calculo)){
global $numero1;
global $numero2;

$resultado = $numero1*$numero2;

    echo "<p class='resultado'>El resultado es: $resultado</p>";

  } if(!strcmp("divicion", $calculo)){
global $numero1;
global $numero2;

$resultado = $numero1/$numero2;
    echo "<p class='resultado'>El resultado es: .resultado</p>";

  } if(!strcmp("modulo", $calculo)){
global $numero1;
global $numero2;

$resultado=$numero1%$numero2;
    echo "<p class='resultado'>El resultado es: $resultado</p>";

  } if(!strcmp("incremento", $calculo)){
    global $numero1;
    // global $numero2;
    
   $numero1++;
    $resultado=$numero1;
        echo "<p class='resultado'>El resultado es: $resultado</p>";
    
} if(!strcmp("modulo", $calculo)){
  global $numero1;
  // global $numero2;

  $numero1--;
  $resultado = $numero1;
      echo "<p class='resultado'>El resultado es: $resultado</p>";
}
}
?>