
<?php
  require_once "../config/conexion4.php";

	$id_produc = $_POST['id_produc'];
	$rate = $_POST['rate'];
	
// Cargando el fichero en la carpeta "subidas"		
if( $id_produc!=null||  $rate!=null){


     $sql = "INSERT INTO valora(id_produc, rate)
			VALUES ('$id_produc','$rate')";
		
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
header('Location: ../../folder/producto.php');



   ?>

  
   