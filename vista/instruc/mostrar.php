<?php
 
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){

    header('location: ../login.php');
  }

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administración</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../assets/assets/css/main.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="../assets/images/icono1.png" />
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				GYM-MIN <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../assets/images/icono1.png" alt="UserIcon">
					<figcaption class="text-center text-titles"><?php echo ucfirst($_SESSION['nombre']); ?></figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="../vista/administrador/admin.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						
						<li>
							<a href="cliente.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Clientes</a>
						</li>
						<li>
							<a href="instruc.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Instructor</a>
						</li>
						
					</ul>
				</li>
				
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-group zmdi-hc-fw"></i> Actividades  <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						
						
						<li>
							<a href="groups.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Grupos</a>
						</li>
						
						
						<li>
							<a href="salon.php"><i class="zmdi zmdi-puzzle-piece zmdi-hc-fw"></i> Salones</a>
						</li>
					</ul>
					
					
				</li>
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shopping-basket zmdi-hc-fw"></i> Productos <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="producto.php"><i class="zmdi zmdi-shopping-cart zmdi-hc-fw"></i> Productos</a>
						</li>
						<li>
							<a href="cate.php"><i class="zmdi zmdi-label zmdi-hc-fw"></i> Categorias</a>
						</li>
					</ul>
				</li>
				<li style="display:none;">
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> Pagos <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="#"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Incripción</a>
						</li>
						<li>
							<a href="#"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Pagos</a>
						</li>
					</ul>
				</li>
				

				
				
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<!-- --------------NOTIFICACIONES--------------------------->
				
				<!-- ----------------------------------------->
				
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Usuarios <small>Instructores</small></h1>
			</div>
			<p class="lead">Se muestra todos los Instructores registrados y tambien poder registrarlos!</p>
		</div>
					<?php 
	
	if(isset($_SESSION['message'])){
		?>
		
		
		 <div class="col-sm-12">
		 
                <div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong> <?php echo $_SESSION['message']; ?>.</strong> 
        </div> 
            </div>
			
			
		<?php

		unset($_SESSION['message']);
		
	}
	
	if(isset($_SESSION['message'])){
		?>
		<div class="alert alert-info text-center" style="margin-top:20px;">
			<?php echo $_SESSION['message']; ?>
		</div>
		<?php

		unset($_SESSION['message']);
	}
		
	
?>
				<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Nuevo</a></li>
					  	<li><a href="#list" data-toggle="tab">Lista</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="../vista/instruc/registro.php" method="post" enctype='multipart/form-data' autocomplete="off">
									    	<div class="form-group label-floating">
											  <label class="control-label">Nombres y Apellidos</label>
											  <input name="nomintr" class="form-control" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">DNI del instructor</label>
											  <input name="dnistr" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="8" type="text">
											</div>
											
											<div class="form-group label-floating">
											  <label class="control-label">Correo</label>
											  <input name="email" class="form-control"  type="email">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Teléfono</label>
											  <input name="teelf" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="9" type="text">
											</div>
											
											<div class="form-group">
											  <label class="control-label">Edad</label>
											  <input name="edad" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="2" type="text">
											</div>
											<div class="form-group">
										        <label class="control-label">Genéro</label>
										        <select name="gener" class="form-control">
										          <option value="Masculino">Masculino</option>
										          <option value="Femenino">Femenino</option>
										        </select>
										    </div>
											<div class="form-group">
										      <label class="control-label">Foto</label>
										      <div>
										        <input type="text" readonly="" class="form-control" placeholder="Browse...">
										        <input type="file" id="exampleInputFile" name="foto" data-toggle="tooltip" data-placement="top" title="Imagen">
												<input type="hidden" name="MAX_FILE_SIZE" value="100000">
										      </div>
											  <div id="preview"></div>
										    </div>
											
											<div class="form-group">
											  <label class="control-label">Fecha de inicio</label>
											  <input name="fech_ini" class="form-control" value="<?php echo date("Y-m-d");?>" type="date">
											</div>
											
											<div class="form-group">
											  <label class="control-label">Fecha de fin</label>
											  <input name="fech_fin" class="form-control" type="date">
											</div>
											<div class="form-group" style="display:none;">
										        <label class="control-label">Estado</label>
										        <select name="estado" class="form-control">
										          <option value="1">1</option>
										         
										        </select>
										    </div>
											
											
											
										    <p class="text-center">
										    	<button type="submit" name="save_task" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
												<input type="hidden" name="op" value="recibir">
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
						
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center" id="myTable">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Foto</th>
											<th class="text-center">Nombre y Apellidos</th>
											<th class="text-center">DNI</th>
											
											<th class="text-center">Correo</th>
											<th class="text-center">Sexo</th>
											<th class="text-center">Inicio</th>
											<th class="text-center">Fin</th>
											<th class="text-center">Estado</th>
											
											
											<th class="text-center">Acciones</th>
											
										</tr>
									</thead>
									<tbody>
									<?php
			//incluimos el fichero de conexion
			include_once('../vista/config/database.php');

	$database = new Connection();
	$db = $database->open();
	try{	
		$sql = 'SELECT * FROM instruc';
		foreach ($db->query($sql) as $row) {
			?>
			<tr>
				<td><?php echo $row['id_intr']; ?></td>
			
				<td><?php  echo "<img src='../assets/images/subi_intr/".$row['foto']."'width='90'"; ?></td>
				
				<td><?php echo $row['nomintr']; ?></td>
				<td><?php echo $row['dnistr']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['gener']; ?></td>
				
				
				
				
				
				
				<td><?php echo $row['fech_ini']; ?></td>
				<td><?php echo $row['fech_fin']; ?></td>
				
				<td>
						 <?php    if($row['estado']==1)  { ?> 
						  <form  method="get" action="javascript:activo('<?php echo $row['id_intr']; ?>')">
							<button type="submit" class="btn btn-success btn-xs"><b>Activo</b></button>
						  </form>
						<?php  }   else {?> 

						  <form  method="get" action="javascript:inactivo('<?php echo $row['id_intr']; ?>')"> 
							<button type="submit" class="btn btn-danger btn-xs"><b>Inactivo</b></button>
						  </form>
						<?php  } ?>                         
				</td>
					
						<td>
			<a href="#ver_<?php echo $row["id_intr"]; ?>" title="Ver datos" data-backdrop="false" class="btn btn-primary btn-raised btn-xs" data-toggle="modal"><i class="zmdi zmdi-eye"></i></a>
			
			
			
			<a href="#delete_<?php echo $row["id_intr"]; ?>" title="Eliminar" data-backdrop="false" class="btn btn-danger btn-raised btn-xs" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span></a>
			
			
			<a href="#file_<?php echo $row["id_intr"]; ?>" title="Editar" data-backdrop="false" class="btn btn-success btn-raised btn-xs" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span></a>
			
			
			<a href="#edit_<?php echo $row["id_intr"]; ?>" title="Editar" data-backdrop="false" class="btn btn-warning btn-raised btn-xs" data-toggle="modal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			
	
			<?php include('../vista/instruc/Modalpassw.php'); ?>
			
			
		</td>
						
					</tr>
					<?php 
				}
			}
			catch(PDOException $e){
				echo "Hubo un problema en la conexión: " . $e->getMessage();
			}

			//Cerrar la Conexion
			$database->close();

					?>	
									
									</tbody>
								</table>
								
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
		

	</section>


	<!-- Notifications area -->


	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->
	<script src="../assets/assets/js/jquery-3.1.1.min.js"></script>
	<script src="../assets/assets/js/sweetalert2.min.js"></script>
	<script src="../assets/assets/js/bootstrap.min.js"></script>
	<script src="../assets/assets/js/material.min.js"></script>
	<script src="../assets/assets/js/ripples.min.js"></script>
	<script src="../assets/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../assets/assets/js/main.js"></script>
	<script>
		$.material.init();
	</script>
	<script src="../assets/js/reloj.js"></script> 
		<script>
   document.getElementById("exampleInputFile").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
    let preview = document.getElementById('preview'),
            image = document.createElement('img');

    image.src = reader.result;

    preview.innerHTML = '';
    preview.append(image);
  };
}
  </script>
  
  	<script>
	function activo(id_intr)
{
	var id=id_intr;
	$.ajax({
        type:"GET",
		url:"../assets/ajax/editar_estado_activo_instru.php?id="+id,
    }).done(function(data){
        window.location.href ='instruc.php';
    })

}

// Editar estado inactivo
function inactivo(id_intr)
{
	var id=id_intr;
	$.ajax({
		type:"GET",
		url:"../assets/ajax/editar_estado_inactivo_instru.php?id="+id,
    }).done(function(data){
        window.location.href ='instruc.php';
    })
}

	</script>
	
	    <script type="text/javascript">
      function myFunction() {
        $.ajax({
          url: "notificaciones.php",
          type: "POST",
          processData:false,
          success: function(data){
            $("#notification-count").remove();                  
            $("#notification-latest").show();$("#notification-latest").html(data);
          },
          error: function(){}           
        });
      }
                                 
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });                                     
    </script>
  
     <script type="text/javascript">
   $(document).ready( function () {
    $('#myTable').DataTable();
} );
   </script>
   <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</body>
</html>