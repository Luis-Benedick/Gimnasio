<?php
if(isset($_POST["agregar"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

// Creamos la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Revisamos la conexión
if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 
$codguia=$_POST['codguia'];
$id_clien=$_POST['id_clien'];
$fechare=$_POST['fechare'];
// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from detgui where coddetgu ='$coddetgu'";
$result = mysqli_query($conn, $sql);
?>

<?php
 // Validamos si hay resultados
 if(mysqli_num_rows($result)>0)
 {
	
  	
	$_SESSION['message'] = 'Llene el formulario';
	header('location: ../visualizar/guia.php');
 }
 else
 {
// Si no hay resultados, ingresamos el registro a la base de datos
$_SESSION['message'] = ($sql2 = "INSERT INTO detgui(codguia, id_clien, fechare)VALUES ('$codguia', '$id_clien', '$fechare')");
if (mysqli_query($conn, $sql2)) {
	// Imprimimos que se ingreso correctamente
	header('location: ../visualizar/guia.php');
} else {
	// Mostramos si hay algun error al insertar registro
	echo "Error: " . $sql2 . "" . mysqli_error($conn);
}

}
// Cerramos la conexión
$conn->close();

}
?>