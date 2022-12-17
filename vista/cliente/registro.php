
<?php
  require_once "../config/conexion4.php";

	$nomcli = $_POST['nomcli'];
	
	$email = $_POST['email'];
	$telef = $_POST['telef'];
	$clave = MD5($_POST['clave']);
	
	$cargo = $_POST['cargo'];
	
	$gener = $_POST['gener'];
	$foto = $_POST['foto'];
	$fech_ini = $_POST['fech_ini'];
	
	$estado = $_POST['estado'];
	
	
	

// Cargando el fichero en la carpeta "subidas"		
if( $nomcli!=null|| $email!=null || $telef!=null || $clave!=null || $cargo!=null ||  $gener!=null
|| $foto!=null|| $fech_ini!=null|| $estado!=null){


     $sql = "INSERT INTO cliente(nomcli,email,telef,clave,cargo,gener,foto,fech_ini,estado)
			VALUES ('$nomcli','$email','$telef','$clave','$cargo','$gener','$foto','$fech_ini','$estado')";
		
   

	
	$query = $con->prepare( $sql );
	if ($query == false) {
	 print_r($con->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: ../../folder/cliente.php');



   ?>
	
   
  
   