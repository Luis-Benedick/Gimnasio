<?php
	session_start();
	include_once('../config/database.php');;

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			
			
			$nomintr = $_POST['nomintr'];
			$dnistr = $_POST['dnistr'];
			$email = $_POST['email'];
			$teelf  = $_POST['teelf'];
			$edad = $_POST['edad'];
			$fech_ini = $_POST['fech_ini'];
			$fech_fin = $_POST['fech_fin'];
			$gener = $_POST['gener'];
			
			

			$sql = "UPDATE instruc SET nomintr = '$nomintr', dnistr = '$dnistr', email = '$email', teelf = '$teelf',
			edad = '$edad', fech_ini = '$fech_ini', fech_fin = '$fech_fin', gener = '$gener'  WHERE id_intr = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Instructor actualizado correctamente' : 'No se puso actualizar el instructor';

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

	header('location:../../folder/instruc.php');

?>