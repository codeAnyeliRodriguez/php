<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
$op = $_GET["op"];
switch ($op) {
  case 'alta':
    $contenido = "php/alta-contacto.php";
    $titulo = "Alta de contactos";
    break;

    case 'alta':
      $contenido = "php/alta-contacto.php";
      $titulo = "Alta de contactos";
      break;

   case 'baja':
      $contenido = "php/baja-contacto.php";
      $titulo = "baja de contactos";
      break;

  case 'cambios':
      $contenido = "php/cambios-contacto.php";
      $titulo = "cambios a contactos";
      break;

  case 'consultas':
     $contenido = "php/consultas-contacto.php";
     $titulo = "consultas a contactos";
     break;
  
  default:
    $contenido = "php/home.php";
    $titulo = "Mis contactos v1";
    break;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/mis-contactos.css">
  <title><?php echo $titulo; ?></title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>
		!window.jQuery && document.write("<script src='js/jquery.min.js'><\/script>");
	</script>
  <script src="js/mis-contactos.js"></script>
</head>
<body>
  <section id="contenido">
    <nav>
      <ul>
        <li><a class="cambio" href="index.php">Home</a></li>
        <li><a class="cambio" href="?op=alta">Alta de contacto</a></li>
        <li><a class="cambio" href="?op=baja">baja de contacto</a></li>
        <li><a class="cambio" href="?op=cambios">cambios de contacto</a></li>
        <li><a class="cambio" href="?op=consultas">consultas de contacto</a></li>

      </ul>
    </nav>
    <section id="principal">
    <?php include($contenido); ?>
    </section>
  </section>
</body>
</html>