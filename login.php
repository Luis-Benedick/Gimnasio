<?php


  session_start();

  // isset verifica si existe una variable o eso creo xd
  if(isset($_SESSION['id'])){
    header('location: controlador/redirec.php');
  }

?>
<!DOCTYPE html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BODY-POWER | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="GYM BEAUTIFUL" />
	<meta name="keywords" content="GYM, responsive, beautiful" />
	<meta name="author" content="GYM-BEAUTIFUL" />

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/gimman.png" />
	<!-- Google Webfonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="assets/assets1/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="assets/assets1/css/icomoon.css">
	<!-- Simple Line Icons-->
	<link rel="stylesheet" href="assets/assets1/css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="assets/assets1/css/magnific-popup.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="assets/assets1/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/assets1/css/owl.theme.default.min.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="assets/assets1/css/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="assets/assets1/css/style.css">
	<link href="assets/css/tabla_precio.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/sweetalert.css">
	<!-- Modernizr JS -->
	<script src="assets/assets1/js/modernizr-2.6.2.min.js"></script>
	<style>
.btn-whatsapp {
       display:block;
       width:70px;
       height:70px;
       color:#fff;
       position: fixed;
       right:20px;
       bottom:20px;
       border-radius:50%;
       line-height:80px;
       text-align:center;
       z-index:999;
}

@media screen and (max-width: 400px) {
 #container {display:block; float:none; }
}

 @media (max-width:700px) and (min-width:500px) {
    .h2{
       font-size: 12px;
    }
}
</style>
<style>
	 .loading  {
		 position: fixed;
		 left: 0px;
		 top: 0px;
		 width: 100%;
		 height: 100%;
		 z-index: 9999;
		 background: url('assets/images/Loading_2.gif') 50% 50% no-repeat rgb(249,249,249);
		opacity: .8; }
	</style>
<style>


.login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #28d;
}

.login-header {
  background: #28d;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  background: #ebebeb;
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.login input[type="email"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
.login input[type="email"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #28d;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background: #17c;
}

/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
}
</style>

	</head>
	<body>
		<div class="loading"></div> 
	<div id="fh5co-offcanvass">
		<ul>
			<li class="active"><a href="vista/pagina.php" >Home</a></li>
			
			<li><a href="vista/pagina.php" data-nav-section="design">¿Por qué?</a></li>
			<li><a href="vista/pagina.php" data-nav-section="testimonies">Shop</a></li>
			<li><a href="vista/pagina.php" data-nav-section="products">Instructores</a></li>
			<li><a href="vista/pagina.php" data-nav-section="benefits">Planes</a></li>
			<li><a href="login.php" data-nav-section="benefits">Login</a></li>
			
		</ul>
		<h3 class="fh5co-lead">Contactanos</h3>
		<p class="fh5co-social-icons">
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-instagram"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-youtube"></i></a>
		</p>
	</div>
	
	<div id="fh5co-menu" class="navbar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><span></span> <i></i></a>
					<a href="vista/pagina.php" class="navbar-brand"><span>BODY-POWER</span></a>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-page">
		<div id="fh5co-wrap">
			<header id="fh5co-hero" data-section="home" role="banner" style="background: url(assets/images/bg3.jpg) top left; background-size: cover;" >
				<div class="fh5co-overlay"></div>
				<div class="fh5co-intro">
					<div class="container">
						<div class="row">
							
							<div class="col-md-6 fh5co-text">
								<h2 class="to-animate intro-animate-1">Todo el Gimnasio en un solo clic.</h2>
								<p class="to-animate intro-animate-2">¿Listo para mejorar tú vida saludable y la de tu familia?.</p>
								<h2 class="to-animate intro-animate-1">S./20.99</h2>
								
							</div>
							<div class="col-md-6 text-right fh5co-intro-img to-animate intro-animate-4">
								<!-- <img src="../assets/images/gym6.jpg" alt="Outline Free HTML5 Responsive Bootstrap Template">-->
							</div>

						</div>
					</div>						
				</div>
			</header>
			<!-- END .header -->
			
			<div id="fh5co-main">
			
			<div class="login">
		  <div class="login-triangle"></div>
		  
		  <h4 class="login-header">Si aún no tienes cuenta, regístrate</h4>
		  <a href="registro.php" ><center>¡Comienza Ya!</center></a>

		 
			<p>
			
			<input type="email" id="user" placeholder="Email">
			</p>
			
			<p><input type="password" id="clave" placeholder="Contraseña"></p>
			
			<p><input type="button"  id="login" value="Acceder" class="btn btn-block btn-success"></p>
			
		 
		  
				</div>
					<div class="row" id="load" hidden="hidden">
					  <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
						<img src="assets/images/load.gif" width="100%" alt="">
					  </div>
					  <div class="col-xs-12 center text-accent">
						<span>Validando información...</span>
					  </div>
					</div>

			</div>
			
		</div>

		<footer id="fh5co-footer" style="">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-footer-content">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-md-push-3">
							<h3 class="fh5co-lead">Sobre</h3>
							<ul>
								<li><a href="#">Tour</a></li>
								<li><a href="#">Compania</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contacto</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-4 col-md-push-3">
							<h3 class="fh5co-lead">Soporte</h3>
							<ul>
								<li><a href="#">Help Center</a></li>
								<li><a href="#">Seguridad</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-4 col-md-push-3">
							<h3 class="fh5co-lead">Mas Enlaces</h3>
							<ul>
								<li><a href="#">Preguntas Frecuentes</a></li>
								<li><a href="#">Terminos de Servicio</a></li>
								<li><a href="#">Politica de Privacidad</a></li>
								<li><a href="#">Mas Aplicaciones</a></li>
							</ul>
						</div>

						<div class="col-md-3 col-sm-12 col-md-pull-9">
							<div class="fh5co-footer-logo"><a href="pagina.php">BODY POWER</a></div>
							<p class="fh5co-copyright"><small>&copy; 2022. Todos los derechos reservados. <br>	by <a href="#" target="_blank">BODY POWER</a> </small></p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter"></i></a>
								<a href="#"><i class="icon-facebook"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>
						
					</div>
				</div>
			</div>
		</footer>
	</div>
<div class="btn-whatsapp">
<a href="https://api.whatsapp.com/send?phone=+51969325940" target="_blank">
<img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
</a>
</div>

	<!-- jQuery -->
	<script src="assets/assets1/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/assets1/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="assets/assets1/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/assets1/js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="assets/assets1/js/jquery.magnific-popup.min.js"></script>
	<!-- Owl Carousel -->
	<script src="assets/assets1/js/owl.carousel.min.js"></script>
	<!-- toCount -->
	<script src="assets/assets1/js/jquery.countTo.js"></script>
	<!-- Main JS -->
	<script src="assets/assets1/js/main.js"></script>
	<script src="assets/js/operaciones.js"></script>
	<script src="assets/js/sweetalert.min.js"></script>
	
<script>
$(window).on('load', function () {
      setTimeout(function () {
    $(".loading").css({visibility:"hidden",opacity:"0"})
  }, 500);
     
});
</script>
	
	</body>
</html>
