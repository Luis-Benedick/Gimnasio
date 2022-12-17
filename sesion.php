<?php


  session_start();

  // isset verifica si existe una variable o eso creo xd
  if(isset($_SESSION['id'])){
    header('location: controlador/redirec.php');
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <title>GYM &mdash; BODY POWER -SHOP</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/gimman.png" />
   
    
    <!-- //Meta tag Keywords -->
	<link rel="stylesheet" href="assets/css/sweetalert.css">
    <!-- Custom-Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="assets/css/shop.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
	
    <!-- //Fonts -->
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
    <!-- mian-content -->
 	    <div class="main-banner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="shop.php">GYM  | SHOP</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="shop.php">Inicio</a></li>
                       
					<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle">Categorias <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
									<a href="#">Categorias <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
			<li>
										<?php
			//incluimos el fichero de conexion
			include_once('vista/config/database.php');

			$database = new Connection();
			$db = $database->open();
			try{	
				$sql = 'SELECT cate.id_cate, cate.nomcate FROM cate';
				foreach ($db->query($sql) as $row) {
					?>
					<li>
					<a href="#"><?php echo $row['nomcate']; ?></a>
					</li>
					<?php 
				}
			}
			catch(PDOException $e){
				echo "Hubo un problema en la conexión: " . $e->getMessage();
			}

			//Cerrar la Conexion
			$database->close();

		?>
				
				</ul>
                        </li>
						<li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle"><span class="fa fa-shopping-cart" aria-hidden="true"></span> </label>
                            <a href="#"><span class="fa fa-shopping-cart" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li>No hay producto en el carrito</li>
                                
                            </ul>
                        </li>
						
                        <li><a href="sesion.php">Iniciar sesión</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
        <!--/banner-->
        <div class="banner-info">
            
            <h3 class="mb-4">Todo el Gimnasio en un solo clic.</h3>
            <div class="ban-buttons">
                
                <a href="#" class="btn active">Comprar ahora</a>
            </div>
        </div>
        <!--// banner-inner -->

    </div>
    <!--//main-content-->
    <!---->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="shop.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active"> Inicio de sesión</li>
    </ol>
    <!---->
    <!-- banner -->
 
	<div id="fh5co-main">
			
			<div class="login">
		  <div class="login-triangle"></div>
		  
		  <h4 class="login-header">Iniciar sesión</h4>
		 

		 
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
 
		<section class="brands py-5" id="brands">
        <div class="container py-lg-0">
            <div class="row text-center brand-items">
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-credit-card" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-rocket" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-lock" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fab fa-facebook" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3 mt-sm-0 mt-4">
                    <a href="#"><span class="fab fa-twitter" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3 mt-sm-0 mt-4">
                    <a href="#"><span class="fa fa-inbox" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </section>
	
	

	<script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
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
