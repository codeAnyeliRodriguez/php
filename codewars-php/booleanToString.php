<?php
#Convert a Boolean to a String
/* Implement a function which convert the given boolean value into its string representation.

Note: Only valid inputs will be given. */

function booleanToString($b) {
  #echo $b ? $b = "true" : $b = "false";
  echo strval($b) ? "true" : "false";
}

$bool = true;
booleanToString($bool);

# ¡Feliz programación! 😊


/* 
Puedes convertir un booleano a una cadena (string) en PHP utilizando varias formas. Aquí tienes algunos ejemplos:

Concatenación de cadenas:
Puedes concatenar el valor booleano con una cadena vacía para convertirlo en una cadena:
php
Copy code
--------------------
$booleano = true;
$cadena = $booleano . ""; // Esto convierte el booleano en una cadena
--------------------
Función strval:
La función strval convierte cualquier valor en una cadena:
php
Copy code
----------------------
$booleano = false;
$cadena = strval($booleano); // Esto convierte el booleano en una cadena
-------------------
Operador ternario y concatenación:
Puedes utilizar un operador ternario para decidir qué cadena asignar según el valor booleano:
php
Copy code
--------------
$booleano = true;
$cadena = $booleano ? "verdadero" : "falso"; // Convierte el booleano en la cadena "verdadero" o "falso"
---------------
Función var_export:
La función var_export convierte una variable en una representación de cadena de sí misma, que puede ser útil para depuración:
php
Copy code
-------------
$booleano = true;
$cadena = var_export($booleano, true); // Convierte el booleano en una cadena representativa
------------
En todos estos ejemplos, la variable $cadena contendrá una representación en forma de cadena del valor booleano. Elige el método que mejor se adapte a tus necesidades y al contexto en el que estás trabajando.*/
?>
