<?php
$de = $_POST["de_txt"];
$para = $_POST["para_txt"];
$asunto = $_POST["asunto_txt"];
$mensaje = $_POST["mensaje_txa"];
$cabeceras = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n"; #concatenar contenido de una variable $<nombredevar> .= <valor>
$cabeceras .= "From: $de \r\n";

$archivo = $_FILES["archivo_fls"]["tmp_name"];
$destino = $_FILES["archivo_fls"]["name"];

if(move_uploaded_file($archivo, $destino)){
	// $respuesta = "El mensaje ha sido enviado =)";
	// incluyo la clase phpmailer
	include_once("class.phpmailer.php");
	include_once("class.smtp.php");

	$mail = new phpMailer();//creo un objeto de tipo phpMailer
	$mail->IsSMTP(); //protocolo SMTP
	$mail->SMTPAuth = true; //autenticacion en el SMTP
	$mail->SMTPSecure = "ssl"; //SSL security socket layer
	$mail->Host = "smtp.gmail.com";//servidor de SMTP de gmail
	$mail->Port = 465; //puerto seguro del servidor SMTP de gmail
	$mail->From = $de; //Remitente del correo
	$mail->AddAddress($para); //Destinatario
	$mail->Username = "anyelib.agent@gmail.com";//Aqui pon tu correo de gmail
	$mail->password = "********";//Aqui pon tu contreseña de gmail
	$mail->Subject = $asunto; //Contenido del correo
	$mail->Body = $mensaje; //Contenido del correo
	$mail->wordwrap = 50; //No. de columnas
	$mail->MsgHTML($mensaje); //Se indica que el cuerpo del correo tendra formato html
	$mail->AddAttachment($destino); //accedemos al archivo que se subio al servidor y lo adjuntamos
	if($mail->send()){ //enviamos el correo por PHPMailer
		$respuesta = "El mensaje ha sido enviado con la clase phpMailer y tu cuenta de gmail =)";
	}else{
		$respuesta = "El mensaje  no se pudo enviar con la clase PHPMailer y tu cuenta de gmail =(";
		$respuesta .= " Error: ".$mail->ErrorInfo;
	}
} else {
	$respuesta = "Ocurrio un error al subir el archivo adjunto =(";
}
unlink($destino);//borramos el archovo del servidor

header("Location: formulario-phpmailer.php?respuesta=$respuesta");
#SMTP = simple mail transfer protocol
?>