<?php
  foreach($_FILES["archivo_fls"] as $clave => $valor){
    echo "Propiedad: $clave --- valor: $valor<br />";
  }

  $archivo = $_FILES["archivo_fls"]["tmp_name"];
  $destino = "archivos/".$_FILES["archivo_fls"]["name"];

  if($_FILES["archivo_fls"]["type"]=="text/plain"){
    move_uploaded_file($archivo,$destino);
    echo "Archivo subido :)";
  }else{
    echo "Solo se admite archivos de texto plano <br /> <a href=\"enviar-archivos.php\">REGRESAR</a>";
  }
?>