<?php
	session_start();
	include_once('../config/database.php');;

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			
			
			$nomcli = $_POST['nomcli'];
			
			$email = $_POST['email'];
			$telef = $_POST['telef'];
			
			$fech_ini = $_POST['fech_ini'];
			
			$gener = $_POST['gener'];
			
			

			$sql = "UPDATE cliente SET nomcli = '$nomcli', email = '$email', telef = '$telef',
			 fech_ini = '$fech_ini', gener = '$gener'  WHERE id_clien = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Cliente actualizada correctamente' : 'No se puso actualizar el cliente';

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