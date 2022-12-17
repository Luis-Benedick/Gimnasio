<?php
	session_start();
	include_once('../config/database.php');;

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			
			
			$nomgru = $_POST['nomgru'];
			
			$fech_entr = $_POST['fech_entr'];
			$fech_salid = $_POST['fech_salid'];
			$hora_entr = $_POST['hora_entr'];
			$hora_salid = $_POST['hora_salid'];
			
			
			$sql = "UPDATE groups SET nomgru = '$nomgru', fech_entr = '$fech_entr',
			fech_salid = '$fech_salid', hora_entr = '$hora_entr', hora_salid = '$hora_salid' WHERE id_grup = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Grupo actualizado correctamente' : 'No se puso actualizar el grupo';

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

	header('location:../../folder/groups.php');

?>