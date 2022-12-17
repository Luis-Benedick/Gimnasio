<?php

  session_start();

  // isset verifica si existe una variable o eso creo xd
  if(isset($_SESSION['id'])){
    header('location: controlador/redirec.php');
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/sweetalert.css">
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">
	
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/gimman.png" />

    <title>GYM</title>
	 
  </head>
  <body>
  <?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/images/undraw_personal_trainer_ote3.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              
            </div>
            <form id="formulario_registro">
					
			<div class="form-group first">
                <label for="username">Nombres y apellidos</label>
                <input type="text" class="form-control" name="name" >

              </div>	
				<br>			  
			
			 <div class="form-group first">
                <label for="username">Correo</label>
                <input type="email" class="form-control" name="email">

              </div>
			  <br>
              <div class="form-group last mb-4">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="clave">
                
              </div>
			  
			  <div class="form-group last mb-4">
                <label for="password">Verificar contraseña</label>
                <input type="password" class="form-control" name="clave2">
                
              </div>
			  
			  <div class="row" id="load" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                  <img src="assets/images/load.gif" width="100%" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Validando información...</span>
                </div>
              </div>
              
              <input type="button" name="button" id="registro" value="Registrate" class="btn btn-block btn-primary">
			  
			  
	
            </form>
			<div class="success-message" id="register-success-message" style="display:none"></div>
			<div class="error-message" id="register-error-message" style="display:none"></div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
	 <script src="assets/js/operaciones.js"></script>
	 <script src="assets/js/sweetalert.min.js"></script>
  </body>
</html>