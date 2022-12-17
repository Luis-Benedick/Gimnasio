<?php

$conexion = mysqli_connect("localhost","root","","gym");

$query = $conexion->query("SELECT * FROM cliente");


echo '<option value="0">Seleccione el cliente</option>';
while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id_clien']. '">' . $row['nomcli'] . '</option>' . "\n";
}
