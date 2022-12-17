
<?php
  require_once "../config/conexion4.php";

	$nomintr = $_POST['nomintr'];
	$dnistr = $_POST['dnistr'];
	$email = $_POST['email'];
	$teelf = $_POST['teelf'];
	
	
	
	$edad = $_POST['edad'];
	$gener = $_POST['gener'];
	$foto = $_FILES['foto']['name'];
	$fech_ini = $_POST['fech_ini'];
	$fech_fin = $_POST['fech_fin'];
	$estado = $_POST['estado'];
	
	
	

// Cargando el fichero en la carpeta "subidas"		
if( $nomintr!=null||  $dnistr!=null || $email!=null || $teelf!=null || $edad!=null || $gener!=null
|| $foto!=null|| $fech_ini!=null|| $fech_fin!=null|| $estado!=null){


     $sql = "INSERT INTO instruc(nomintr, dnistr,email,teelf,edad,gener,foto,fech_ini,fech_fin,estado)
			VALUES ('$nomintr','$dnistr','$email','$teelf','$edad','$gener','$foto','$fech_ini','$fech_fin','$estado')";
		
   

	
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
header('Location: ../../folder/instruc.php');



   ?>
   <?php
   require_once "../config/conexion4.php";
   
   $foto = $_FILES['foto'];
 
  

// Cargando el fichero en la carpeta "subidas"

move_uploaded_file($foto['tmp_name'], "../../assets/images/subi_intr/".$foto['name']);


		?>		
   
  
   