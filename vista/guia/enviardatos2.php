<?php
session_start();
include_once('../config/database.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO detgui (codguia, id_clien, fechare) VALUES (:codguia, :id_clien, :fechare)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':codguia' => $_POST['codguia'] , ':id_clien' => $_POST['id_clien'] , ':fechare' => $_POST['fechare'])) ) ? 'Guia guardado correctamente' : 'Algo salió mal. No se puede agregar la guia';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: ../visualizar/guia.php');
	
?>