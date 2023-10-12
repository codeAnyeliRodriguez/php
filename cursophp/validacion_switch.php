<?php
#switch-case(sintaxis)
/* Switch(condicion a evaluar):
    case valor 1:
      codigo;
      break;
    case valor 2:
      codigo;
      break; 
    case valor 3:
      codigo;
      break;
      endswitch
      
  Switch(condicion a evaluar){
    case valor 1:
      codigo;
      break;
    case valor 2:
      codigo;
      break; 
    case valor 3:
      codigo;
      break;
    }
      * */

      if(isset($_POST["enviando"])){
        $contra = $_POST["contra_usuario"];
        $nombre = $_POST["nombre_usuario"];
        /* if($edad <= 18){
          echo'eres menor de edad';
        }else if($edad <= 40){
          echo'eres joven';
        }else if($edad <= 65){
          echo 'eres maduro';
        }else{
        echo 'cu&iacutedate';
        #í  = &iacute */

        switch (true){
          case $nombre == 'Anyeli' && $contra == '1234';
            echo 'Usuario autorizado. Hola Anyeli';
            break;
          case $nombre == 'Maria' && $contra == '5555':
            echo 'usuario autorizado. Hola Maria';
            break;
          case $nombre =='Pedro' && $contra == '1111':
            echo 'usuario autorizado. Hola Pedro';
            break;
          default:
          echo 'Usario no autorizado';
        }
      } 
          
?>