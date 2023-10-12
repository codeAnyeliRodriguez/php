<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table{
      width:50%;
      border: 1px dotted red;
      margin: auto;
    }
  </style>
</head>
<body>
  <?php
  require('datos_conexion.php');

  #procedimientos
  $conexion= mysqli_connect($db_host,$db_usuario,$db_contra,);//establecer conexion
  if(mysqli_connect_errno()){
    echo 'Fallo al conectar con la BBDD';
    exit();
  }
  mysqli_select_db($conexion, $db_nombre) or die('No se encuentra la BBDD');

  mysqli_set_charset($conexion, 'utf-8');

  // $consulta = 'SELECT * FROM artículos WHERE PAíSDEORIGEN="España"';
  $consulta = 'SELECT * FROM artículos';

  $resultdos= mysqli_query($conexion, $consulta);


  // while(($fila=mysqli_fetch_row($resultdos))==true){
 /*  while($fila=mysqli_fetch_row($resultdos)){

    echo'<table><tr><td>';

    echo $fila[0].'</td><td>';
    echo $fila[1].'</td><td>';
    echo $fila[2].'</td><td>';
    echo $fila[3].'</td><td>';
    echo $fila[4].'</td><td></tr></table>';
    // echo $fila[5].' ';
    // echo $fila[6].' ';

    echo '<br>';
    echo '<br>';

  }  */
// https://www.php.net/manual/en/function.mysql-fetch-array
   while($fila=mysqli_fetch_array($resultdos, MYSQL_BOTH)){

    echo'<table><tr><td>';

    echo $fila['PRECIO'].'</td><td>';
    echo $fila['NOMRE ARTÍCULO'].'</td><td>';
    echo $fila['PAÍS DE ORIGEN'].'</td><td></tr></table>';
   

    echo '<br>';
    echo '<br>';

  } 

  // comodines:
  //  % sustitulle una cadena de caracteres
  //  _  sustituye un unico caracter 
  mysqli_close($conexion);//cerrar conexion

 /*  $fila=mysqli_fetch_row($resultdos);

  echo $fila[0].' ';
  echo $fila[1].' ';
  echo $fila[2].' ';
  echo $fila[3].' ';

  echo'<br>';
  $fila=mysqli_fetch_row($resultdos);

  echo $fila[0].' ';
  echo $fila[1].' ';
  echo $fila[2].' ';
  echo $fila[3].' ';
  
  echo '<br>';
  $fila=mysqli_fetch_row($resultdos);

  echo $fila[0].' ';
  echo $fila[1].' ';
  echo $fila[2].' ';
  echo $fila[3].' '; */


  ?>
</body>
</html>