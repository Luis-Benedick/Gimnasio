
<?php
  require_once "../config/conexion4.php";

	$nomguia = $_POST['nomguia'];
	$decp = $_POST['decp'];
	
	
	$foto = $_FILES['foto']['name'];
	
	$fecha = $_POST['fecha'];
	
// Cargando el fichero en la carpeta "subidas"		
if( $nomguia!=null||  $decp!=null || $foto!=null || $fecha!=null){


     $sql = "INSERT INTO gua(nomguia, decp,foto,fecha)
			VALUES ('$nomguia','$decp','$foto','$fecha')";
		
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
header('Location: ../../folder/guia.php');



   ?>
   <?php
   require_once "../config/conexion4.php";
   
   $foto = $_FILES['foto'];
 
  

// Cargando el fichero en la carpeta "subidas"

move_uploaded_file($foto['tmp_name'], "../../assets/images/guia/".$foto['name']);


		?>		
   
  
   