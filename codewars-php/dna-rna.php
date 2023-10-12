<?php
//DNA to RNA Conversion
/* Deoxyribonucleic acid, DNA is the primary information storage molecule in biological systems. It is composed of four nucleic acid bases Guanine ('G'), Cytosine ('C'), Adenine ('A'), and Thymine ('T').

Ribonucleic acid, RNA, is the primary messenger molecule in cells. RNA differs slightly from DNA its chemical structure and contains no Thymine. In RNA Thymine is replaced by another nucleic acid Uracil ('U').

Create a function which translates a given DNA string into RNA.

For example:

"GCAT"  =>  "GCAU"
The input string can be of arbitrary length - in particular, it may be empty. All input is guaranteed to be valid, i.e. each input string will only ever consist of 'G', 'C', 'A' and/or 'T'. */

function dnaToRna($str) {
   /*  if($str == 'GCAT'){
        $entrada = $str;
        $result =  str_replace("T","U",$str);
        echo $result;
    }else{     
        $entrada = $str;
        $result =  str_replace("U","T",$str);
        echo $result;
    } */
    return str_replace("T", "U", $str);
  }

  $cadena = "GCAT";

  echo dnaToRna($cadena);
?>