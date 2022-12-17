<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../login.php');
  }
$id = $_SESSION['id'];
?>

<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'gym');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query('SELECT * FROM gua')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 3;

if ($stmt = $mysqli->prepare('SELECT * FROM gua ORDER BY nomguia LIMIT ?,?')) {
	
	
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>
	
	
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="GYM BEAUTIFUL" />
	<meta name="keywords" content="GYM, responsive, beautiful" />
	<meta name="author" content="GYM-BEAUTIFUL" />
    <title>GYM-BEAUTIFUL</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/gimman.png" />
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="../../assets/css/menu_left.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"/>	
	<link rel="stylesheet"  href="../../assets/css/card.css" rel="stylesheet">
	<style>
	body {
  font-family: 'Poppins', sans-serif;
  background-color: #fcfcfc;
}
.viewport {
  position: relative;
  display: block;
  width: 36rem;
  height: 20rem;
  margin-left: auto;
  margin-right: auto;
  margin-top: 6rem;
  background-color: #fff; 
  box-shadow: 0 0.25rem 8rem rgba(0,0,0,0.2);
  padding: 1rem 1.5rem;
  border-radius: 0.5rem;
  animation-name: popAnim;
	animation-duration: 0.3s;
	animation-timing-function: forward;
}
@keyframes popAnim {
	0% { transform: scale(0,0); }
	100%   { transform: scale(1,1); }
}
ul.tabs { 
  display: block;
  padding: 0; 
  margin: 0;
  border-bottom: 1px solid #ECEFF1;
}
ul.tabs:after { 
  content: "";
  display: table;
  clear: both;
}
ul.tabs li { 
  list-style: none; 
  float: left; 
}
input[type="radio"] { display: none; }
input[type="radio"]:checked ~ label:after { 
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  margin-bottom: -1px;
  height: 0.25rem;
  background-color: #03A9F4;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
label {
  position:relative;
  display: block;
  color: #37474F;
  font-weight: 500;
  font-size: 0.875rem;
  text-align: center;
  text-transform: capitalize;
  padding: 0.5rem 1rem 0.75rem;
  margin-right: 0.25rem;
  line-height: 1.25rem;
  cursor: pointer;
  background-color: white;
  transition: 0.3s ease-in-out;
}
label:hover:after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  margin-bottom: -1px;
  background-color: #B3E5FC;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  height: 0.25rem;
}
input[type="radio"]:checked ~ .tabBody { 
  display: block;
}
.tabBody { 
  position: absolute;
  display: none; 
  top: 0; left: 0; right: 0; bottom: 0;
  margin-top: 3.5rem;
  padding: 1rem 1.5rem;
}
p {
  margin: 0 0 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5rem;
  color: #546E7A;
}
	</style>
	<style>
	.pagination {
				list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: space-between;
				box-sizing: border-box;
			}
			.pagination li {
				box-sizing: border-box;
				padding-right: 10px;
			}
			.pagination li a {
				box-sizing: border-box;
				background-color: #e2e6e6;
				padding: 8px;
				text-decoration: none;
				font-size: 12px;
				font-weight: bold;
				color: #616872;
				border-radius: 4px;
			}
			.pagination li a:hover {
				background-color: #d4dada;
			}
			.pagination .next a, .pagination .prev a {
				text-transform: uppercase;
				font-size: 12px;
			}
			.pagination .currentpage a {
				background-color: #518acb;
				color: #fff;
			}
			.pagination .currentpage a:hover {
				background-color: #518acb;
			}
	</style>
	 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
  </head>
  <body>
     
	
	<ul class="menu">

      <li title="home">
	  <a href="../usuarios/user.php" class="home">
	  menu
	  </a>
	  </li>
      
      <li title="contact"><a href="#" class="menu-button about">archive</a></li>
	  
	
	  
    </ul>
    
    <ul class="menu-bar">
        <li><a href="#" class="menu-button"><?php echo ucfirst($_SESSION['nombre']); ?></a></li>
        
     
		<li><a href="../../controlador/cerrarSesion.php">Cerrar Sesion</a></li>
    </ul>
		
<!-- ----------------------------------------------------------------->
  <?php 
	
	if(isset($_SESSION['message'])){
		?>
		<div class="alert alert-info text-center" style="margin-top:20px;">
			<?php echo $_SESSION['message']; ?>
		</div>
		<?php

		unset($_SESSION['message']);
	}
?>
   
<div class="viewport">
  <ul class="tabs">
 <li>
      <input type="radio" name="tab" id="playlists" value="playlists" checked> 
      <label for="playlists">Guía</label>
      <div class="tabBody">
		<table class="table table-hover text-center">
			
				<tbody>
				<?php while ($row = $result->fetch_assoc()): ?>
					<tr>
					
					<td><?php  echo "<img src='../../assets/images/guia/".$row['foto']."'width='40'"; ?></td>
					<td><?php echo $row['nomguia']; ?></td>
					
					<td>
						<a title="Agregar" data-backdrop="false" data-target="#myModal_<?php echo $row['codguia']; ?>" data-toggle="modal"  class="btn btn-primary btn-raised btn-xs openBtn"><i class="fa fa-check"></i></a>
						<?php include('../guia/modalAdd.php'); ?>
						
						
					</td>
				
					
					</tr>
					<?php endwhile; ?>
				</tbody>
		</table>
		<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
		<!-- ---------------------------------------------->
		<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="guia.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="guia.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="guia.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="guia.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="guia.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="guia.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="guia.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="guia.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="guia.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
		</ul>
		<?php endif; ?>
		
      </div>
    </li>  
    <li>
      <input type="radio" name="tab" id="artists" value="artists"> 
      <label for="artists">Mi guía</label>
      <div class="tabBody">
        <p>Entrenar Pesar 3 veces a la semana Full Body.</p>
      </div>
    </li>  
    <li>
      <input type="radio" name="tab" id="albums" value="albums"> 
      <label for="albums">Consejos</label>
      <div class="tabBody">
        <p>Cardio despues de entrenar.</p>

        <p>Priorizar Ejercicios Compuestos.</p>
      </div>
    </li>
  </ul>
</div>

  <!-- The Modal -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
<script src="../../assets/js/menu_left.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script>
 $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
 </script>


  </body>
</html>
<?php
	$stmt->close();
}
?>
