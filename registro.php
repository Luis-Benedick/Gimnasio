
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
	<title>GYM-BEAUTIFUL | Registro</title>
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
	<link href="assets/css/radio.css" rel="stylesheet">
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

 <style type="text/css">
            .ocultar {
                display: none;
            }

            .mostrar {
                display: block;
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

	</head>
	<body>
	        <div class="loading"></div>
		
	<div id="fh5co-offcanvass">
		<ul>
			<li class="active"><a href="vista/pagina.php">Home</a></li>
			
			<li><a href="vista/pagina.php" >¿Por qué?</a></li>
			<li><a href="vista/pagina.php" >Shop</a></li>
			<li><a href="vista/pagina.php" >Instructores</a></li>
			<li><a href="vista/pagina.php" >Planes</a></li>
			<li><a href="login.php" >Login</a></li>
			
		</ul>
		<h3 class="fh5co-lead">Connect with us</h3>
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
					<a href="vista/pagina.php" class="navbar-brand"><span>GYM-BEAUTIFUL</span></a>
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
								<p class="to-animate intro-animate-3"><a href="registro.php" class="btn btn-primary btn-md"><i class="icon-video-camera"></i> Zoom</a></p>
								
							</div>
							<div class="col-md-6 text-right fh5co-intro-img to-animate intro-animate-4">
								<!-- <img src="../assets/images/gym6.jpg" alt="Outline Free HTML5 Responsive Bootstrap Template">-->
							</div>

						</div>
					</div>						
				</div>
			</header>
			<!-- END .header -->
	
				
				<div id="fh5co-products" data-section="products">

				    <div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
								<h2 class="fh5co-lead animate-single product-animate-1">Solicitar prueba</h2>
								<p class="fh5co-sub animate-single product-animate-2">En 24 horas tu periodo de prueba estará habilitado, después del mismo, nos comunicaremos contigo para que nos confirmes si deseas continuar con tu membresía por el tiempo restante.</p>
							</div>
						
			        	</div>
				    </div>
					 <div id="msg"></div>

        <!-- Mensajes de Verificación -->
        <div id="error" class="alert alert-danger ocultar" role="alert">
            Las Contraseñas no coinciden, vuelve a intentar !
        </div>
        <div id="ok" class="alert alert-success ocultar" role="alert">
            Las Contraseñas coinciden ! (Procesando formulario ... )
        </div>
					
					<div class="login">
						  <div class="login-triangle"></div>
					   <form  action="vista/cliente/registro.php" method="post" autocomplete="off" onsubmit="verificarPasswords(); return false">
						  <h4 class="login-header">Registro</h4>
						  <p><input type="text" name="nomcli" placeholder="Nombres y Apellidos"></p>
						  <p><input type="email" name="email" placeholder="Email"></p>
						  <p><input type="password" id="pass1" name="clave" placeholder="Contraseña"></p>
						   <p><input type="password" id="pass2" name="clave2" placeholder="Verificar contraseña"></p>
						  <p><input type="text" maxlength="9" name="telef" placeholder="Teléfono"></p>
						  <!-- ------------------------------------------------>
						  <p>Seleccione su género:</p>
						   <div class="radio">
							<input id="radio-1" name="gener" type="radio" value="Masculino" checked>
							<label for="radio-1" class="radio-label">Masculino</label>
						  </div>
						<div class="radio">
							<input id="radio-2" name="gener" type="radio" value="Femenino">
							<label  for="radio-2" class="radio-label">Femenino</label>
						  </div>
						  
						  <div class="radio">
							<input id="radio-3" name="gener" type="radio" value="NO">
							<label  for="radio-3" class="radio-label">Prefiero no decirlo</label>
						  </div>
						
						  <!-- ------------------------------------------------>
						   <p>Seleccione su ícono:</p>
						   
							  <input type="radio" name="foto" id="sad" class="input-hidden"  style="cursor:pointer;" value="on.png"/>
								<label for="sad">
								  <img 
									src="assets/images/iconos/people/on.png" 
									 style="border-radius:22px;" alt="people">
								</label>
							
							<input 
							  type="radio" name="foto"
							  id="happy" class="input-hidden" value="three.png"/>
							<label for="happy">
							  <img 
								src="assets/images/iconos/people/three.png" 
								 alt="people" style="border-radius:22px;">
							</label>
							
							<input 
							  type="radio" name="foto"
							  id="w" class="input-hidden" value="four.png" />
							<label for="w">
							  <img 
								src="assets/images/iconos/people/four.png" 
								alt="people"  style="border-radius:22px;"/>
							</label>
							
							<input 
							  type="radio" name="foto"
							  id="a" class="input-hidden" value="five.png" />
							<label for="a">
							  <img 
								src="assets/images/iconos/people/five.png" 
								alt="people"  style="border-radius:22px;"/>
							</label>
							
							<input 
							  type="radio" name="foto"
							  id="b" class="input-hidden" value="eight.png" />
							<label for="b">
							  <img 
								src="assets/images/iconos/people/eight.png" 
								alt="people"  style="border-radius:22px;"/>
							</label>
							
							<input 
							  type="radio" name="foto"
							  id="c" class="input-hidden" value="fourty.png" />
							<label for="c">
							  <img 
								src="assets/images/iconos/people/fourty.png" 
								alt="people"  style="border-radius:22px;"/>
							</label>
							
							<input 
							  type="radio" name="foto"
							  id="d" class="input-hidden"  value="sixty.png"/>
							<label for="d">
							  <img 
								src="assets/images/iconos/people/sixty.png" 
								alt="people"  style="border-radius:22px;"/>
							</label>
							
							<input 
							  type="radio" name="foto"
							  id="e" class="input-hidden" value="twenty_seven.png" />
							<label for="e">
							  <img 
								src="assets/images/iconos/people/twenty_seven.png" 
								alt="people"  style="border-radius:22px;"/>
							</label>
							
							<input 
							  type="radio" name="foto"
							  id="f" class="input-hidden"  value="twenty_two.png"/>
							<label for="f">
							  <img 
								src="assets/images/iconos/people/twenty_two.png" 
								alt="people"  style="border-radius:22px;"/>
							</label>
							
							<input 
							  type="radio" name="foto"
							  id="g" class="input-hidden" value="twenty_nine.png" />
							<label for="g">
							  <img 
								src="assets/images/iconos/people/twenty_nine.png" 
								alt="people"  style="border-radius:22px;"/>
							</label>
							
							<input 
							  type="radio" name="foto"
							  id="h" class="input-hidden" value="twenty_five.png" />
							<label for="h">
							  <img 
								src="assets/images/iconos/people/twenty_five.png" 
								alt="people"  style="border-radius:22px;"/>
							</label>
							
							<input 
							  type="radio" name="foto"
							  id="i" class="input-hidden"  value="eightyn.png"/>
							<label for="i">
							  <img 
								src="assets/images/iconos/people/eightyn.png" 
								alt="people"  style="border-radius:22px;"/>
							</label>
						   <!-- ------------------------------------------------>
						<p><input style="display:none;" type="text" name="estado" value="0" placeholder="Estado"></p>
						<p><input style="display:none;" type="text" name="cargo" value="2" placeholder="Cargo"></p>
						<p><input style="display:none;" type="date" name="fech_ini" value="<?php echo date("Y-m-d");?>"  placeholder="Fecha"></p>	
						<p><input type="submit" name="save_task" value="Registrate" class="btn btn-block btn-success"></p>
						<input type="hidden" name="op" value="recibir">
				 </form>
				 <div class="success-message" id="register-success-message" style="display:none"></div>
				<div class="error-message" id="register-error-message" style="display:none"></div>
				
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
				
		</div>
		
		<footer id="fh5co-footer" style="">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-footer-content">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-md-push-3">
							<h3 class="fh5co-lead">About</h3>
							<ul>
								<li><a href="#">Tour</a></li>
								<li><a href="#">Company</a></li>
								<li><a href="#">Jobs</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">New Features</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-4 col-md-push-3">
							<h3 class="fh5co-lead">Support</h3>
							<ul>
								<li><a href="#">Help Center</a></li>
								<li><a href="#">Terms of Service</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">More Apps</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-4 col-md-push-3">
							<h3 class="fh5co-lead">More Links</h3>
							<ul>
								<li><a href="#">Feedback</a></li>
								<li><a href="#">Frequently Ask Questions</a></li>
								<li><a href="#">Terms of Service</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">More Apps</a></li>
							</ul>
						</div>

						<div class="col-md-3 col-sm-12 col-md-pull-9">
							<div class="fh5co-footer-logo"><a href="pagina.php">GYM-BEAUTIFUL</a></div>
							<p class="fh5co-copyright"><small>&copy; 2021. Todos los derechos reservados. <br>	by <a href="#" target="_blank">GYM-BEAUTIFUL</a> </small></p>
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
	
	    <script type="text/javascript"> 

        function verificarPasswords() {

            // Ontenemos los valores de los campos de contraseñas 
            pass1 = document.getElementById('pass1');
            pass2 = document.getElementById('pass2');

            // Verificamos si las constraseñas no coinciden 
            if (pass1.value != pass2.value) {

                // Si las constraseñas no coinciden mostramos un mensaje 
                document.getElementById("error").classList.add("mostrar");

                return false;
            }
            
            else {

                // Si las contraseñas coinciden ocultamos el mensaje de error
                document.getElementById("error").classList.remove("mostrar");

                // Mostramos un mensaje mencionando que las Contraseñas coinciden 
                document.getElementById("ok").classList.remove("ocultar");

                // Desabilitamos el botón de login 
                document.getElementById("login").disabled = true;

                // Refrescamos la página (Simulación de envío del formulario) 
                setTimeout(function() {
                    location.reload();
                }, 3000);

                return true;
            }

        } 
        
    </script>
		<script>
$(window).on('load', function () {
      setTimeout(function () {
    $(".loading").css({visibility:"hidden",opacity:"0"})
  }, 500);
     
});
</script>

	
	</body>
</html>
