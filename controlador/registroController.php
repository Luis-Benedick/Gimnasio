<?php

  $name   = $_POST['name'];
  $email  = $_POST['email'];
  $telef  = $_POST['telef'];
  $clave  = $_POST['clave'];
  $clave2 = $_POST['clave2'];
  $cargo = $_POST['cargo'];
  $gener = $_POST['gener'];
  $foto = $_POST['foto'];
  $fech_ini = $_POST['fech_ini'];
  $estado = $_POST['estado'];

 if(empty($email) || empty($telef) || empty($clave) || empty($clave2) || empty($cargo) || empty($gener) || empty($foto) || empty($fech_ini) || empty($estado))
  {

    echo 'error_1'; // Un campo esta vacio y es obligatorio

  }else{

    if($clave == $clave2){

      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

        # Incluimos la clase usuario
        require_once('../modelo/usuario.php');

        # Creamos un objeto de la clase usuario
        $usuario = new Usuario();

        # Llamamos al metodo login para validar los datos en la base de datos
        $usuario -> registroUsuario($name, $email, $telef,$clave ,$cargo ,$gener ,$foto ,$fech_ini ,$estado);


      }else{
        echo 'error_4';
      }


    }else{
      echo 'error_2';
    }

  }




?>
