<?php
function conectarse(){
	$servidor="localhost";
	$usuario="root";
	$password="";
	$bd="mis_contactos";

	$conectar = new mysqli($servidor,$usuario,$password,$bd)
    Or die("No se pudo conectar al servidor de BD  MySQL");
	return $conectar;
}

$conexion = conectarse();
#verificar: http://localhost/curso-php/mis-contactos/php/conexion.php
  #si no aparece ningun error o warning significa que esta conectada
?>