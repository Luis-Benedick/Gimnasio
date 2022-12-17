<?php

$conexion = mysqli_connect("localhost","root","","gym");

$query = $conexion->query("SELECT * FROM cate");


echo '<option value="0">Seleccione la categoria</option>';
while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id_cate']. '">' . $row['nomcate'] . '</option>' . "\n";
}
