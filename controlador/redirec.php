<?php

  session_start();

  if($_SESSION['cargo'] == 1){
    header('location: ../vista/administrador/admin.php');
  }else if($_SESSION['cargo'] == 2){
    header('location: ../vista/usuarios/user.php');
  }

 ?>
