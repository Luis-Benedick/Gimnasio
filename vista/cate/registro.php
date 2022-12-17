
<?php
  require_once "../config/conexion4.php";

	$nomcate = $_POST['nomcate'];
	$fecha_create = $_POST['fecha_create'];
	$estado = $_POST['estado'];
	

// Cargando el fichero en la carpeta "subidas"		
if( $nomcate!=null||  $fecha_create!=null || $estado!=null){


     $sql = "INSERT INTO cate(nomcate, fecha_create,estado)
			VALUES ('$nomcate','$fecha_create','$estado')";
	
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
header('Location: ../../folder/cate.php');



   ?>
   
  
   