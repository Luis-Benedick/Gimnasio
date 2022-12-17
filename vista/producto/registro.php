
<?php
  require_once "../config/conexion4.php";

	$nomprod = $_POST['nomprod'];
	$id_cate = $_POST['id_cate'];
	
	$descrp = $_POST['descrp'];
	
	$foto = $_FILES['foto']['name'];
	$preciop = $_POST['preciop'];
	$canti = $_POST['canti'];
	$fechare = $_POST['fechare'];
	$estado = $_POST['estado'];
	
	
	

// Cargando el fichero en la carpeta "subidas"		
if( $nomprod!=null||  $id_cate!=null || $descrp!=null || $foto!=null || $preciop!=null || $canti!=null || $fechare!=null || $estado!=null){


     $sql = "INSERT INTO producto(nomprod, id_cate,descrp,foto,preciop,canti,fechare,estado)
			VALUES ('$nomprod','$id_cate','$descrp','$foto','$preciop','$canti','$fechare','$estado')";
		
   

	
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
   <?php
   require_once "../config/conexion4.php";
   
   $foto = $_FILES['foto'];
 
  

// Cargando el fichero en la carpeta "subidas"

move_uploaded_file($foto['tmp_name'], "../../assets/images/subi_produc/".$foto['name']);


		?>		
   
  
   