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
  $busqueda=$_GET["buscar"];

  require("datos_conexion.php");

  #procedimientos
  $conexion= mysqli_connect($db_host,$db_usuario,$db_contra);//establecer conexion

  if(mysqli_connect_errno()){
    echo 'Fallo al conectar con la BBDD';
    exit();
  }
  mysqli_select_db($conexion, $db_nombre) or die('No se encuentra la BBDD');

  mysqli_set_charset($conexion, "utf-8");

  $consulta = "SELECT * FROM artículos WHERE nombre articulo LIKE '$busqueda'";

  $resultdos= mysqli_query($conexion, $consulta);


 
   while($fila=mysqli_fetch_array($resultdos, MYSQL_ASSOC)){

    echo'<table><tr><td>';

    echo $fila['PRECIO'].'</td><td>';
    echo $fila['NOMRE ARTÍCULO'].'</td><td>';
    echo $fila['PAÍS DE ORIGEN'].'</td><td></tr></table>';
   

    echo '<br>';
    echo '<br>';

  } 

  mysqli_close($conexion);//cerrar conexion

  ?>
</body>
</html>