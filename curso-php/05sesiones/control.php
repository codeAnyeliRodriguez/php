<?php
  if($_POST["usuario_txt"]=="Anyeli" && $_POST["password_txt"]=="12345"){
    // inicio la sesion
    session_start();

    // Declaro mis variables de sesion
    $_SESSION["autentificado"]= true;
    $_SESSION["usuario"] = $_POST["usuario_txt"];

    header("Location: archivo-protegido.php");
  }else{
    header("Location: index.php?error=si");
  }
?>