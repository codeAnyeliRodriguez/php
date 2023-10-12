<?php
$conexion = mysqli_connect("localhost","root","") or die("No se pudo conectar con el servidor de BD");
echo "Conectado al servidor de BD MySQL<br />";

mysqli_select_db($conexion, "mis_contactos") or die("no se pudo seleccionar la BD<br />");
echo "BD seleccionda: <b>mis_contactos</b><br />";
echo"<h1>Las 4 operaciones b&aacute;sicas a una BD</h1>";
echo "<h2>1)INSERCI&Oacute;N DE DATOS</h2>";
// INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_campos)
$consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen)VALUES(
  'anyelib.dev@gmail.com','Anyeli Rodriguez','f','1999-12-30','18298548349','republica dominicana','me.png')";

$ejecutar_consulta = mysqli_query($conexion,$consulta);
echo "Se han insertado los datos =)<br />";

echo "<h2>ELIMINACI&Oacute;N de DATOS</h2>";
// DELETE FROM nombre tabla WHERE campo = valor
$consulta = "DELETE FROM contactos WHERE email ='anyelib.agent@gmail.com'";
$ejecutar_consulta = mysqli_query($conexion,$consulta);
echo "Datos eliminados =( <br />";

echo "<h2>3)MODIFICACI&oacute; DE DATOS</h2>";
// UPDATE nombre_tabla SET nombre_campo = valor_campo,otro campo = otro campo WHERE campo = valor
$consulta = "UPDATE contactos SET email = 'anyelib.agent@gmail.com',
nombre = 'Anyeli', imagen = 'Anyeli.png' WHERE email ='anyelib.dev@gmail.com'";
$ejecutar_consulta= mysqli_query($conexion,$consulta);
echo "Los datos han sido actualizados =) <br />";

echo "<h2>CONSULTA(b&uacute;squeda) DE DATOS</h2>";
// SELECT * FROM nombre_tabla WHERE campo = valor
$consulta = "SELECT * FROM contactos";

$ejecutar_consulta = mysqli_query($conexion,$consulta);

echo "<h3>Consulta que trae todos los registros de la tabla</h3>";
while($registro = mysqli_fetch_array($ejecutar_consulta)){
  echo $registro["email"]."---";
  echo $registro["nombre"]."---";
  echo $registro["sexo"]."---";
  echo $registro["nacimiento"]."---";
  echo $registro["telefono"]."---";
  echo $registro["pais"]."---";
  echo $registro["imagen"]."---";
  echo "<br />";
}

#--
$consulta = "SELECT * FROM contactos WHERE nombre = 'Anyeli'";

$ejecutar_consulta = mysqli_query($conexion,$consulta);

echo "<h3>Consulta que trae los registros de la tabla con el nombre = 'Anyeli'</h3>";
while($registro = mysqli_fetch_array($ejecutar_consulta)){
  echo $registro["email"]."---";
  echo $registro["nombre"]."---";
  echo $registro["sexo"]."---";
  echo $registro["nacimiento"]."---";
  echo $registro["telefono"]."---";
  echo $registro["pais"]."---";
  echo $registro["imagen"]."---";
  echo "<br />";
}
#--
$consulta = "SELECT * FROM contactos WHERE nombre = 'Anyeli' AND imagen = 'anyeli.png'";

$ejecutar_consulta = mysqli_query($conexion,$consulta);

echo "<h3>Consulta que trae todos los registros de la tabla con el nombre = 'Anyeli' y imagen = 'anyeli.phg'</h3>";
while($registro = mysqli_fetch_array($ejecutar_consulta)){
  echo $registro["email"]."---";
  echo $registro["nombre"]."---";
  echo $registro["sexo"]."---";
  echo $registro["nacimiento"]."---";
  echo $registro["telefono"]."---";
  echo $registro["pais"]."---";
  echo $registro["imagen"]."---";
  echo "<br />";
}
mysqli_close($conexion);
echo "<h4>Conexi&oacute;n Cerrada</h4>";
?>