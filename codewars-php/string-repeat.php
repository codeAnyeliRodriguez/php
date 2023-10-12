<?php
/* Write a function that accepts an integer n and a string s as parameters, and returns a string of s repeated exactly n times. */
#Examples (input -> output)

/* 6, "I"     -> "IIIIII"
  5, "Hello" -> "HelloHelloHelloHelloHello" */

$str = "@";
$n = 5;
/* function repeatStr($n, $str)
{
  $str_r = null;
  for($i = 0; $i < $n; $i++){
   $str_r .= $str;
  }
  echo $str_r;
}  */

 function repeatStr($n, $str)
{
  echo str_repeat($str, $n);
} 

repeatStr($n, $str);
?>