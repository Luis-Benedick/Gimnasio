<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');


  class Usuario extends Conexion
  {

    public function login($user, $clave)
    {
     


      # Nos conectamos a la base de datos
      parent::conectar();

     
      // El metodo salvar sirve para escapar cualquier comillas doble o simple y otros caracteres que pueden vulnerar nuestra consulta SQL
      $user  = parent::salvar($user);
      $clave = parent::salvar($clave);

     

    
      $consulta = 'select id, nombre, cargo from usuarios where email="'.$user.'" and clave= MD5("'.$clave.'") UNION select id_clien , nomcli,  cargo from cliente where email="'.$user.'" and clave= MD5("'.$clave.'")';
     
      $verificar_usuario = parent::verificarRegistros($consulta);

      // si la consulta es mayor a 0 el usuario existe
      if($verificar_usuario > 0){


        $user = parent::consultaArreglo($consulta);

       

        session_start();

       

        $_SESSION['id']     = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];
		
        $_SESSION['cargo']  = $user['cargo'];

       
        // Verificamos que cargo tiene l usuario y asi mismo dar la respuesta a ajax para que redireccione
        if($_SESSION['cargo'] == 1){
          echo 'vista/administrador/admin.php';
        }else if($_SESSION['cargo'] == 2){
          echo 'vista/usuarios/user.php';
        }


        // u.u finalizamos aqui :v

      }else{
        // El usuario y la clave son incorrectos
        echo 'error_3';
      }


      # Cerramos la conexion
      parent::cerrar();
    }

    public function registroUsuario($name, $email, $telef , $clave , $cargo , $gener , $foto , $fech_ini , $estado)
    {
      parent::conectar();

      $name  = parent::filtrar($name);
      $email = parent::filtrar($email);
      $telef = parent::filtrar($telef);
	  $clave = parent::filtrar($clave);
	  $cargo = parent::filtrar($cargo);
	  $gener = parent::filtrar($gener);
	  $foto = parent::filtrar($foto);
	  $fech_ini = parent::filtrar($fech_ini);
	  $estado = parent::filtrar($estado);


      // validar que el correo no exito
$verificarCorreo = parent::verificarRegistros('select id from usuarios where email="'.$email.'" UNION select id_clien from cliente where email="'.$email.'"');


      if($verificarCorreo > 0){
        echo 'error_3';
      }else{

        parent::query('insert into cliente(nomcli, email, telef,clave, cargo, gener, foto, fech_ini,estado) values("'.$name.'", "'.$email.'","'.$telef.'" ,MD5("'.$clave.'"), 2, "'.$gener.'" , "'.$foto.'", "'.$fech_ini.'" , "'.$estado.'")');

        session_start();

        $_SESSION['nomcli'] = $name;
        $_SESSION['cargo']  = 2;
		

        echo 'vista/usuarios/user.php';

      }

      parent::cerrar();
    }

  }


?>
