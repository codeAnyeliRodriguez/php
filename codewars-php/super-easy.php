<?php
// Super Duper Easy
/* Make a function that returns the value multiplied by 50 and increased by 6. If the value entered is a string it should return "Error". */
function problem($x){
/*  if(is_string($x)){
        echo "error";
 }else{
  echo 50 * $x +6;
    } */
    return is_string($x)?"Error" : 50 * $x +6;
}
echo problem(5);
?>