
<?php
  require_once "../config/conexion4.php";

	$nomgru = $_POST['nomgru'];
	$id_salon = $_POST['id_salon'];
	$id_clien = $_POST['id_clien'];
	$fech_entr = $_POST['fech_entr'];
	$fech_salid = $_POST['fech_salid'];
	$hora_entr = $_POST['hora_entr'];
	$hora_salid = $_POST['hora_salid'];
	$estado = $_POST['estado'];
	

// Cargando el fichero en la carpeta "subidas"		
if( $nomgru!=null||  $id_salon!=null || $id_clien!=null || $fech_entr!=null || $fech_salid!=null || $hora_entr!=null || $hora_salid!=null 
|| $estado!=null){


     $sql = "INSERT INTO groups(nomgru, id_salon,id_clien,fech_entr,fech_salid, hora_entr, hora_salid,estado)
			VALUES ('$nomgru','$id_salon','$id_clien' ,'$fech_entr' ,'$fech_salid' ,'$hora_entr' ,'$hora_salid' ,'$estado')";
	
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
header('Location: ../../folder/groups.php');



   ?>
   
  
   