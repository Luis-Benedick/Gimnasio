<?php
 
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){

    header('location: ../../login.php');
  }

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administración</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../assets/assets/css/main.css">
	<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/icono1.png" />
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				BODY-POWER <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../../assets/images/icono1.png" alt="UserIcon">
					<figcaption class="text-center text-titles"><?php echo ucfirst($_SESSION['nombre']); ?></figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
				<!--
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
				-->	
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
					<a href="admin.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						
						<li>
							<a href="../../folder/cliente.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Clientes</a>
						</li>
						<li>
							<a href="../../folder/instruc.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Instructor</a>
						</li>
						
					</ul>
				</li>
				
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-group zmdi-hc-fw"></i> Actividades  <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<!--
						<li>
							<a href="#"><i class="zmdi zmdi-bike zmdi-hc-fw"></i> Actividades</a>
						</li>
						-->
						<li>
							<a href="../../folder/groups.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Grupos</a>
						</li>
						<!--
						<li>
							<a href="#"><i class="zmdi zmdi-calendar-check zmdi-hc-fw"></i> Horarios</a>
						</li>
						-->
						<li>
							<a href="../../folder/salon.php"><i class="zmdi zmdi-puzzle-piece zmdi-hc-fw"></i> Salones</a>
						</li>
						
						<li>
							<a href="../../folder/guia.php"><i class="zmdi zmdi-puzzle-piece zmdi-hc-fw"></i> Guía de ejercicios</a>
						</li>
					</ul>
					
					
				</li>
				
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shopping-basket zmdi-hc-fw"></i> Productos <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="../../folder/producto.php"><i class="zmdi zmdi-shopping-cart zmdi-hc-fw"></i> Productos</a>
						</li>
						<li>
							<a href="../../folder/cate.php"><i class="zmdi zmdi-label zmdi-hc-fw"></i> Categorias</a>
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
				

				<!--
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Settings  <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="#"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> GYM Data</a>
						</li>
					</ul>
				</li>
				-->
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
				<!--
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				-->
				<!--
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				-->
				<!--
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
				-->
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">
				  <?php 
					$hora= getdate();
					$a="Buen día";
					$b="Buenas tardes";
					$c="Buenas noches";

					if ($hora<12 =='$a'){
					echo "","<font color='green'>$a</font>";
					}
					elseif ($hora >=12 =='$b')
					{
					echo "","<font color='green'>$b</font>";	
					}
					elseif ($hora <=16 =='$b')
					{
					echo "","<font color='green'>$b</font>";	
					}
					elseif ($hora >=19 =='$c')
					{
					echo "","<font color='green'>$c</font>";	
					}
					elseif ( $hora >=24 =='$c')
					{
					echo "","<font color='green'>$c</font>";	
					}
					?> 
					<small><?php echo $_SESSION['nombre']; ?>!</small>
			  </h1>
			</div>
			<!--
			<h5>
					<strong>Tu último acceso es:</strong>
					<?=date('m/d/Y g:ia');?>
					 
			</h5>
			-->
			
											<?php

				$user_agent = $_SERVER['HTTP_USER_AGENT'];

				function getBrowser($user_agent){

				if(strpos($user_agent, 'MSIE') !== FALSE)
				   return 'Internet explorer';
				 elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
				   return 'Microsoft Edge';
				 elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
					return 'Internet explorer';
				 elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
				   return "Opera Mini";
				 elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
				   return "Opera";
				 elseif(strpos($user_agent, 'Firefox') !== FALSE)
				   return 'Mozilla Firefox';
				 elseif(strpos($user_agent, 'Chrome') !== FALSE)
				   return 'Google Chrome';
				 elseif(strpos($user_agent, 'Safari') !== FALSE)
				   return "Safari";
				 else
				   return 'No hemos podido detectar su navegador';
				}
				/*
				$navegador = getBrowser($user_agent);
				echo "<strong>Navegador</strong>: ".$navegador;
				*/
						?>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Clientes
				</div>
				<?php
                              require_once "../config/DBconect.php";
                              $sql = "SELECT COUNT(*) total FROM cliente";
                              $result = $db->query($sql); //$pdo sería el objeto conexión
                              $total = $result->fetchColumn();
			   ?>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo  $total; ?></p>
					<small>Register</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Instructores
				</div>
				<?php
                              require_once "../config/DBconect.php";
                              $sql = "SELECT COUNT(*) total FROM instruc";
                              $result = $db->query($sql); //$pdo sería el objeto conexión
                              $total = $result->fetchColumn();
			   ?>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-alt"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo  $total; ?></p>
					<small>Register</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Productos
				</div>
				<?php
                              require_once "../config/DBconect.php";
                              $sql = "SELECT COUNT(*) total FROM producto";
                              $result = $db->query($sql); //$pdo sería el objeto conexión
                              $total = $result->fetchColumn();
			   ?>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-collection-bookmark"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo  $total; ?></p>
					<small>Register</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Salones
				</div>
				
				<?php
                              require_once "../config/DBconect.php";
                              $sql = "SELECT COUNT(*) total FROM salon";
                              $result = $db->query($sql); //$pdo sería el objeto conexión
                              $total = $result->fetchColumn();
			   ?>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-airline-seat-legroom-normal"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo  $total; ?></p>
					<small>Register</small>
				</div>
			</article>
		</div>
		

	</section>


	<!-- Notifications area -->
	<!--
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>
    -->
	<!-- Dialog help -->
	<!--
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
	-->
	<!--====== Scripts -->
	<script src="../../assets/assets/js/jquery-3.1.1.min.js"></script>
	<script src="../../assets/assets/js/sweetalert2.min.js"></script>
	<script src="../../assets/assets/js/bootstrap.min.js"></script>
	<script src="../../assets/assets/js/material.min.js"></script>
	<script src="../../assets/assets/js/ripples.min.js"></script>
	<script src="../../assets/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../../assets/assets/js/main.js"></script>
	<script>
		$.material.init();
	</script>
	<script src="../../assets/js/reloj.js"></script> 
</body>
</html>