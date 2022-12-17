<?php
$conn = new mysqli("localhost","root","","gym");

$sql = "UPDATE cliente SET noti = 1 WHERE noti = 0";	
$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM cliente ORDER BY id_clien DESC limit 5";
$result = mysqli_query($conn, $sql);

$response='';

while($row=mysqli_fetch_array($result)) {

	/* Formate fecha */
	$fechaOriginal = $row["fech_ini"];
	$fechaFormateada = date("d-m-Y", strtotime($fechaOriginal));

	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject'>". $row["id_clien"] . " - <span>". $fechaFormateada . "</span> </div>" . 
	"<div class='notification-comment'>" . $row["nomcli"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>