<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form name="form1" method="post" action="">
<p>
  <input type="text" name="num1" id="num1">
  <label for="num2" name="num2" id="num2"></label>
  <input type="text" name="num2" id="num2">
  <label for="operacion"></label>
  <select name="operacion" id="operacion">
      <option>suma</option>
      <option>resta</option>
      <option>multiplicacion</option>
      <option>divicion</option>
      <option>modulo</option>
  </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="enviar" onClick="prueba">
  </p>
  </form>
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
if(isset($_POST["button"])){
  $numero1 = $_POST["num1"];
  $numero2 = $_POST["num2"];
  $operacion = $_POST["operacion"];

  if(!strcmp("suma", $operacion)){

    echo "El resultado es: ".($numero1+$numero2);

  } if(!strcmp("resta", $operacion)){

    echo "El resultado es: ".($numero1-$numero2);

  } if(!strcmp("multiplicacion", $operacion)){

    echo "El resultado es: ".($numero1*$numero2);

  } if(!strcmp("divicion", $operacion)){

    echo "El resultado es: ".($numero1/$numero2);

  } if(!strcmp("modulo", $operacion)){

    echo "El resultado es: ".($numero1%$numero2);

  }
}
?>

</body>
</html>