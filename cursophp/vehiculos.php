<?php
 class Coche{
  // propidades (variables de clase)
  protected $ruedas;
  var $color;
  protected $motor;
  
  function Coche(){ //metodo constructor
    $this->ruedas=4; //this = raferencia a la clase
    $this->color='';
    $this->motor=1600;
  }
// acceder a propidades encapsuladas
function get_motor(){
  return $this->motor;
}

  function get_ruedas(){
    return $this->ruedas;
  }
  // metodos
  function arrancar(){
    echo'Estoy arrancando<br>';
  }
  function girar(){
    echo 'Estoy girando<br>';
  }
  function frenar(){
    echo 'Estoy frenando<br>';
  }
  function set_color($color_coche, $nombre_coche){
    $this->color=$color_coche;
    echo 'El color de ' .$nombre_coche . ' es: ' . $this->color . "<br>";
  }
}

#-----------
class Camion extends Coche{
  
  
  function Camion(){ //metodo constructor
    $this->ruedas=8; //this = raferencia a la clase
    $this->color='gris';
    $this->motor=2600;
  }
 
  function set_color($color_camion, $nombre_camion){
    $this->color=$color_camion;
    echo 'El color de '.$nombre_camion . ' es: ' .$this->color. '<br>';
  }
  function arrancar(){
    parent::arrancar();
    echo 'camion arrancado';
  }
}
?>