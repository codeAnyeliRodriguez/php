<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
if(isset($_POST["enviando"])){
  $contra = $_POST["contra"];
	$nombre = $_POST["nombre_usuario"];
 /*  if($edad <= 18){
    echo'eres menor de edad';
  }else if($edad <= 40){
    echo'eres joven';
  }else if($edad <= 65){
    echo 'eres maduro';
  }else{
  echo 'cu&iacutedate';
  #í  = &iacute
} */

/* if($edad < 18){
  echo 'eres menor de edad. No tienes acceso';
}else{
  echo 'Eres mayor de edad. Puedes acceder';
} */

#operador ternario
$resultado= $nombre =='Anyeli' && $contra=='1234' ? 'puedes acceder' : 'no puedes acceder';
echo $resultado;
}
?>