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
  #arrays multidimencionales
$alimentos=array('fruta'=>array('tropical'=>'kiwi',
                                'citrico'=>'mandarina',
                                'otros'=>'manzana'),
                  'leche'=>array('animal'=>'vaca',
                                  'vegetal'=>'coco'),
                  'carne'=>array('vacuno'=>'lomo',
                                  'porcino'=>'pata'));
// echo $alimentos['carne']['vacuno'];
/*  foreach($alimentos as $clave_alim=>$alim){
  echo"$clave_alim:<br>";
  while(list($clave,$valor)=each($alim)){
    echo"$clave=$valor<br>";
  }
  echo"<br>";
}  */

echo var_dump($alimentos);
  ?>
</body>
</html>