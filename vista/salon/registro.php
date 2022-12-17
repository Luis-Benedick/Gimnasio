
<?php
  require_once "../config/conexion4.php";

	$nomsalo = $_POST['nomsalo'];
	
	

// Cargando el fichero en la carpeta "subidas"		
if($nomsalo!=null){


     $sql = "INSERT INTO salon(nomsalo)
			VALUES ('$nomsalo')";
	
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
header('Location: ../../folder/salon.php');



   ?>
   
  
   