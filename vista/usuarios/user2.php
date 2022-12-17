<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../login.php');
  }

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
	<link href="../../assets/css/tabla_precio2.css" rel="stylesheet">
	
  </head>
  <body>
    
	

<div class="background">
  <div class="container">
    <div class="panel pricing-table">
      
      <div class="pricing-plan">
        <img src="../../assets/images/gimnasia.png" alt="" class="pricing-img">
        <h2 class="pricing-header">Plan programa</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">12 sesiones de entrenamiento por 1 mes.</li>
          <li class="pricing-features-item">3 sesiones a la semana del programa y horario definido.</li>
		  <li class="pricing-features-item">Guía de alimentación saludable.</li>
        </ul>
        <span class="pricing-price">Free</span>
        <a href="#/" class="pricing-button">Solicitar</a>
      </div>
      
      <div class="pricing-plan">
        <img src="../../assets/images/deportista.png" alt="" class="pricing-img">
        <h2 class="pricing-header">Plan personalizado</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">12 sesiones por 1 mes.</li>
          <li class="pricing-features-item">Plan personalizado de entrenamiento.</li>
		  <li class="pricing-features-item">Guía de alimentación saludable.</li>
		  <li class="pricing-features-item">Control semanal.</li>
        </ul>
        <span class="pricing-price">S./90.00</span>
        <a href="#/" class="pricing-button is-featured">Solicitar</a>
      </div>
      
      <div class="pricing-plan">
        <img src="../../assets/images/piramide.png" alt="" class="pricing-img">
        <h2 class="pricing-header">Asesoria nutricional</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">Dedicated</li>
          <li class="pricing-features-item">Simple horizontal scalability</li>
        </ul>
        <span class="pricing-price">S./25.00</span>
        <a href="#/" class="pricing-button">Solicitar</a>
      </div>
	  <a href="../../controlador/cerrarSesion.php">
      <button type="button" name="button">Cerrar sesion</button>
    </a>
      
    </div>
  </div>
</div>


 
  </body>
</html>
