<?php include("sesion.php"); ?>
bienvenida:
<?php echo $_SESSION["usuario"]; ?>
<br /><br />
Estas en una p&aacute;gina segura con sesiones en php
<br /><br />
<a href="archivo-protegido2.php">Ir a otra p&aacute;gina segura</a>
<br /><br />
<a href="Salir.php">SALIR</a>