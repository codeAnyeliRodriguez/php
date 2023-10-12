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
  // clase
  /* class Coche{
    // propidades (variables de clase)
    var $ruedas;
    var $color;
    var $motor;
    
    function Coche(){ //metodo constructor
      $this->ruedas=4; //this = raferencia a la clase
      $this->color='';
      $this->motor=1600;
    } */
    // metodos
   /*  function arrancar(){
      echo'Estoy arrancando<br>';
    }
    function girar(){
      echo 'Estoy girando<br>';
    }
    function frenar(){
      echo 'Estoy frenando<br>';
    }
    function establece_color($color_coche, $nombre_coche){
      $this->color=$color_coche;
      echo 'El color de ' .$nombre_coche . ' es: ' . $this->color . "<br>";
    }

  } */
  // instancia de clase
 /* $renault=new Coche(); //estado inicial al objeto o instancia
 $mazda=new Coche();
 $seat=new Coche();
 */
/*  $mazda->girar();
echo $mazda->ruedas;
 */
/* $renault->establece_color('Rojo','renault');
$seat->establece_color("azul", 'seat'); */

include("vehiculos.php");

$mazda=new Coche();
$pegaso=new Camion();

/* echo 'El mazda tiene: ' . $mazda->ruedas . ' ruedas. <br>';
echo 'El pegaso tiene: ' . $pegaso->ruedas . ' ruedas. <br>'; 
$pegaso->frenar();
$pegaso->arrancar(); */

// acceder a propidades encapsuladas
// setter--modifcar
// getter---ver las propiedades

echo 'El Mazda tiene ' . $mazda->get_ruedas() . ' ruedas<br>';
echo 'El pegaso tiene ' .$pegaso->get_ruedas() . ' ruedas<br>';
echo 'El Mazda tiene un motor ' . $mazda->get_motor() . ' cc <br>';
?>
</body>
</html>