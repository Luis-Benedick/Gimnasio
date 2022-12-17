<?php
	session_start();
	include_once('../config/database.php');;

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			
			//$clave = password_hash($_POST['clave'], PASSWORD_BCRYPT);
			
			$clave = MD5($_POST['clave']);
			
			
			

			$sql = "UPDATE cliente SET clave = '$clave' WHERE id_clien = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Contraseña actualizada correctamente' : 'No se puso actualizar contraseña';

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

	header('location:../../folder/cliente.php');

?>