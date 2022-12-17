<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../login.php');
  }
$id = $_SESSION['id'];
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
	<link href="../../assets/css/card.css" rel="stylesheet">
  </head>
  <body>
     
	
	<ul class="menu">

      <li title="home">
	  <a href="user.php" class="home">
	  menu
	  </a>
	  </li>
     <!-- 
      <li title="search"><a href="#" class="search">archive</a></li>
      <li title="archive"><a href="#" class="archive">archive</a></li>
      <li title="archive"><a href="#" class="archive">archive</a></li>
      <li title="archive"><a href="#" class="archive">archive</a></li>
	  -->
	  <li title="contact"><a href="#" class="menu-button about">archive</a></li>
	  
    </ul>
    
    <ul class="menu-bar">
        <li><a href="#" class="menu-button"><?php echo ucfirst($_SESSION['nombre']); ?></a></li>
        <!--
        <li><a href="#">Profile</a></li>
        <li><a href="#">Calendar</a></li>
        <li><a href="#">Settings</a></li>
		-->
		<li><a href="../../controlador/cerrarSesion.php">Cerrar Sesion</a></li>
    </ul>
	
		<section class="section-10">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="product-card bg-white mb-4 overflow-hidden d-lg-flex rounded-lg position-relative">
						<div class="product-image overflow-hidden d-flex align-items-center m-4">
							<img src="../../assets/images/gym4.jpg" alt="" class="product-thumbnail rounded-lg">
						</div>
						<div class="py-4 pr-4 pl-4 pl-lg-0 product-details">
							<h4 class="font-weight-bold d-flex justify-content-between">
								<a href="#!" class="text-dark" title="Elegant designed coffee plant for desktop decoration">
									Guía de ejercicios
								</a>
								<a href="#!" class="ml-2 text-muted"><i class="fa fa-heart-o"></i></a>
							</h4>
							<a href="#!" class="text-uppercase py-0 px-2 rounded-lg border mb-2 d-inline-block">
								<small class="font-weight-bold">GYM</small>
							</a>
							<div class="d-flex align-items-center mb-2">
								<div class="rating-stars">
									<img src="../../assets/images/grey-star.svg" alt="">
									<div class="filled-star" style="width:86%"></div>
								</div>
								
							</div>
							
							<ul class="text-muted pl-3">
								<li>Estiramiento de cuadriceps con silla . </li>
								<li>Mini trampolin.</li>
								<li>Apretar una pelota.</li>
								<li>Postura correcta de pie.</li>
								<li>Levantarse desde sentado.</li>
							</ul>
							<!--<button href="#!" class="btn btn-outline-primary">Entrar</button>-->
							<a type="button" href="../visualizar/guia.php" class="btn btn-outline-primary">Entrar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="section-5">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="product-card bg-white mb-4 overflow-hidden d-lg-flex rounded-lg position-relative">
						<div class="product-image overflow-hidden d-flex align-items-center m-4">
							<img src="../../assets/images/rutin.png" alt="" class="product-thumbnail rounded-lg">
						</div>
						<div class="py-4 pr-4 pl-4 pl-lg-0 product-details">
							<h4 class="font-weight-bold d-flex justify-content-between">
								<a href="#!" class="text-dark" title="Elegant designed coffee plant for desktop decoration">
									Rutinas
								</a>
								<a href="#!" class="ml-2 text-muted"><i class="fa fa-heart-o"></i></a>
							</h4>
							<a href="#!" class="text-uppercase py-0 px-2 rounded-lg border mb-2 d-inline-block">
								<small class="font-weight-bold">GYM</small>
							</a>
							<div class="d-flex align-items-center mb-2">
								<div class="rating-stars">
									<img src="../../assets/images/grey-star.svg" alt="">
									<div class="filled-star" style="width:86%"></div>
								</div>
								
							</div>
							
							<ul class="text-muted pl-3">
								<li>Pectoral + abdominales. </li>
								<li>Espalda.</li>
								<li>Hombros + abdominales.</li>
								<li>Piernas.</li>
								<li>Brazos + abdominales.</li>
							</ul>
							<a type="button" href="#!" class="btn btn-outline-primary">Entrar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
		<section class="section-5">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="product-card bg-white mb-4 overflow-hidden d-lg-flex rounded-lg position-relative">
						<div class="product-image overflow-hidden d-flex align-items-center m-4">
							<img src="../../assets/images/nutri.jpg" alt="" class="product-thumbnail rounded-lg">
						</div>
						<div class="py-4 pr-4 pl-4 pl-lg-0 product-details">
							<h4 class="font-weight-bold d-flex justify-content-between">
								<a href="#!" class="text-dark" title="Elegant designed coffee plant for desktop decoration">
									Nutrición
								</a>
								<a href="#!" class="ml-2 text-muted"><i class="fa fa-heart-o"></i></a>
							</h4>
							<a href="#!" class="text-uppercase py-0 px-2 rounded-lg border mb-2 d-inline-block">
								<small class="font-weight-bold">GYM</small>
							</a>
							<div class="d-flex align-items-center mb-2">
								<div class="rating-stars">
									<img src="../../assets/images/grey-star.svg" alt="">
									<div class="filled-star" style="width:86%"></div>
								</div>
								
							</div>
							
							<ul class="text-muted pl-3">
								<li>Jengibre. </li>
								<li>Aceite de oliva.</li>
								<li>Yogur griego.</li>
								<li>Huevo.</li>
								<li>Fruta y verdura.</li>
							</ul>
							<a type="button" href="#!" class="btn btn-outline-primary">Entrar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="section-5">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="product-card bg-white mb-4 overflow-hidden d-lg-flex rounded-lg position-relative">
						<div class="product-image overflow-hidden d-flex align-items-center m-4">
							<img src="../../assets/images/conse.jpg" alt="" class="product-thumbnail rounded-lg">
						</div>
						<div class="py-4 pr-4 pl-4 pl-lg-0 product-details">
							<h4 class="font-weight-bold d-flex justify-content-between">
								<a href="#!" class="text-dark" title="Elegant designed coffee plant for desktop decoration">
									Consejos
								</a>
								<a href="#!" class="ml-2 text-muted"><i class="fa fa-heart-o"></i></a>
							</h4>
							<a href="#!" class="text-uppercase py-0 px-2 rounded-lg border mb-2 d-inline-block">
								<small class="font-weight-bold">GYM</small>
							</a>
							<div class="d-flex align-items-center mb-2">
								<div class="rating-stars">
									<img src="../../assets/images/grey-star.svg" alt="">
									<div class="filled-star" style="width:86%"></div>
								</div>
								
							</div>
							
							<ul class="text-muted pl-3">
								<li> El cardio despues de entrenar. </li>
								<li>La progresion lo es todo.</li>
								<li>Priorizar ejercicios compuestos.</li>
								<li>Trabajar el musculo, no mover el peso.</li>
								<li>Calentar siempre.</li>
							</ul>
							<a type="button" href="#!" class="btn btn-outline-primary">Entrar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
<script src="../../assets/js/menu_left.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  </body>
</html>
