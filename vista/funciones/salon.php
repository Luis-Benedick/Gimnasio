<?php

$conexion = mysqli_connect("localhost","root","","gym");

$query = $conexion->query("SELECT * FROM salon");


echo '<option value="0">Seleccione el salón</option>';
while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id_salon']. '">' . $row['nomsalo'] . '</option>' . "\n";
}
