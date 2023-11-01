<?php
// L1: Bartender, drinks!
/* Complete the function that receives as input a string, and produces outputs according to the following table:

Input	                Output
"Jabroni"	            "Patron Tequila"
"School Counselor"	    "Anything with Alcohol"
"Programmer"	        "Hipster Craft Beer"
"Bike Gang Member"	    "Moonshine"
"Politician"	        "Your tax dollars"
"Rapper"	            "Cristal"
anything else	        "Beer"

Note: anything else is the default case: if the input to the function is not any of the values in the table, then the return value should be "Beer".

Make sure you cover the cases where certain words do not show up with correct capitalization. For example, the input "pOLitiCIaN" should still return "Your tax dollars". */
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

function get_drink_by_profession(string $s): string {

    if(strtolower($s) == strtolower('Jabroni')){
        echo "Patron Tequila";
    }else if(strtolower($s) == strtolower('School Counselor')){
      echo "Anything with Alcohol";
    }elseif (strtolower($s) == strtolower('Programmer')) {
      echo "Hipster Craft Beer";
    }elseif(strtolower($s) == strtolower('Bike Gang Member')){
      echo "Moonshine";
    }elseif (strtolower($s) == strtolower('Politician')) {
      echo "Your tax dollars";
    }elseif (strtolower($s) == strtolower('Rapper')) {
      echo "Cristal";
    }else {
      echo "Beer";
    }
  }

  get_drink_by_profession('rapper');

?>