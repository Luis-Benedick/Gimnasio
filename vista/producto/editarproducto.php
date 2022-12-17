<?php
	session_start();
	include_once('../config/database.php');;

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			
			
			$nomprod = $_POST['nomprod'];
			
			$descrp = $_POST['descrp'];
			$preciop = $_POST['preciop'];
			$canti = $_POST['canti'];
			$fechare = $_POST['fechare'];
			
			$sql = "UPDATE producto SET nomprod = '$nomprod', descrp = '$descrp', preciop = '$preciop', canti = '$canti',
			fechare = '$fechare' WHERE id_produc = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Producto actualizada correctamente' : 'No se puso actualizar el producto';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location:../../folder/producto.php');

?>