<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  /*   $semana[]='lunes';
    $semana[]='Martes';
    $semana[]='Miercoles'; */

   /*  $semana=array('Lunes', 'Marte','Miercoles', 'Jueves'); */
  //  echo $semana[1];

   #array asociativo
  //  $datos=array('Nombre'=>'Anyeli','Apellido'=>'Rodriguez','Edad'=>21);
  // $datos='Beatriz';

  // echo $datos['Apellido'];
 /*  if(is_array($datos)){
    echo 'Es un array';
  }else{
    echo 'No es un Array';
  } */

  #agregar elemento a un array asociativo
/*   $datos['Pais']='España';
  #foreach recorrer array asociativo
  foreach($datos as $clave=>$valor){
    echo "A $clave le corresponde $valor <br>";
  } */


  #recorrer array indexado
 /*  $semana[]='Lunes';
  $semana[]='Martes';
  $semana[]='Miercoles';
  $semana[]='Jueves';

  for($i=0; $i<count($semana); $i++){
    echo $semana[$i] . "<br>";
  }
  #agregar elemento
  $semana[]='Viernes';

   for($i=0; $i<count($semana); $i++){
    echo $semana[$i] . "<br>";
  } */
  $semana=array('Lunes', 'Marte','Miercoles', 'Jueves'); 
  sort($semana);//ordenar alfabeticamente
  for($i=0; $i<count($semana); $i++){
    echo $semana[$i] . "<br>";
  }
  
  ?>
</body>
</html>