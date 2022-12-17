<?php
	session_start();
	include_once('../config/database.php');;

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			
			
			$nomcate = $_POST['nomcate'];
			$fecha_create = $_POST['fecha_create'];
			
			
			
			

			$sql = "UPDATE cate SET nomcate = '$nomcate', fecha_create = '$fecha_create' WHERE id_cate = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Categoria actualizada correctamente' : 'No se puso actualizar la categoria';

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

	header('location:../../folder/cate.php');

?>