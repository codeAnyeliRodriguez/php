<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Env&iacute;o de datos por GET y POST</title>
</head>
<body>
  <hgroup><h1>formulario enviado por el m&eacute;todo GET</h1></hgroup>
  <form name="envia-get_frm" action="envia-datos.php" method="get" enctype="application/x-www-form-urlencoded">
    <label for="">Ingresa tu Nombre:</label>
    <input type="text" name="nombre_txt" />
    <br/><br/>
    <label for="">Ingresa tu Password:</label>
    <input type="password" name="password_txt" />
    <br/><br/>
    <input type="submit" name="enviar_btn" value="Envia-GET">
<div>
    <hgroup><h1>formulario enviado por el m&eacute;todo POST</h1></hgroup>
  <form name="envia-post_frm" action="envia-datos.php" method="post" enctype="application/x-www-form-urlencoded">
    <label for="">Ingresa tu Nombre:</label>
    <input type="text" name="nombre_txt1" />
    <br/><br/>
    <label for="">Ingresa tu Password:</label>
    <input type="password" name="password_txt1" />
    <br/><br/>
    <input type="submit" name="enviar_btn1" value="Envia-POST">
  </form>
</div>
</body>
</html>