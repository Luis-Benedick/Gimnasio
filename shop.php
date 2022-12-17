<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
  <title>GYM &mdash; BEAUTIFUL-SHOP</title>
    <meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/gimman.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/shop.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/card.css" type="text/css" media="all">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	 <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
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
  
	    <div class="main-banner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="shop.php">BODY POWER  | SHOP</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="index.php">Inicio</a></li>
                       
					
						
                        <li><a href="login.php">Iniciar sesión</a></li>
						
						
						
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
	
	    <section class="about py-5">
        <div class="container pb-lg-3">
            <h3 class="tittle text-center">Productos recientes</h3>
            <div class="row">
			
               <?php
			//incluimos el fichero de conexion
			include_once('vista/config/database.php');

			$database = new Connection();
			$db = $database->open();
			try{	
				$sql = 'SELECT producto.id_produc, producto.nomprod,cate.nomcate, producto.descrp, producto.foto,producto.preciop, producto.canti, producto.fechare, producto.estado  FROM producto INNER JOIN cate ON producto.id_cate=cate.id_cate LIMIT 6';
				foreach ($db->query($sql) as $row) {
					?>
	<div class="col-md-4 product-men">
                    <div class="product-shoe-info shoe text-center">
                        <div class="men-thumb-item">
                            <img src="assets/images/subi_produc/<?php echo $row['foto']; ?>" class="img-fluid" alt="foto">
                            <span class="product-new-top">Nuevo</span>
                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="#"><?php echo $row['nomprod']; ?> </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money">S/. <?php echo $row['preciop']; ?></span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li>
								
								<a href="#exampleModalLong_<?php echo $row["id_produc"]; ?>" title="Vista rápida" data-backdrop="false" data-toggle="modal"><span class="fa fa-eye" aria-hidden="true"></span></a>
								
								</li>
								
								<?php include('vista/visualizar/vistaModal.php'); ?>
								
								<li><a href="#"><span class="fa fa-shopping-bag" title="Añadir al carrito" aria-hidden="true"></span></a></li>
								
                            </ul>
                        </div>
						
                    </div>
                </div>
					
					<?php 
				}
			}
			catch(PDOException $e){
				echo "Hubo un problema en la conexión: " . $e->getMessage();
			}

			//Cerrar la Conexion
			$database->close();

		?>
		 
            </div>

        </div>
		<div class="ban-buttons" style="margin-left:40px;">
                
                <a href="vista/visualizar/allprodc.php" class="btn active">Ver más</a>
            </div>
			

    </section>
	
	
		    <section class="about py-5">
        <div class="container pb-lg-3">
            <h3 class="tittle text-center">Principales categorías</h3>
            <div class="row">
			
               <?php
			//incluimos el fichero de conexion
			include_once('vista/config/database.php');

			$database = new Connection();
			$db = $database->open();
			try{	
				$sql = 'SELECT producto.id_produc, producto.nomprod,cate.id_cate,cate.nomcate, producto.descrp, producto.foto,producto.preciop, producto.canti, producto.fechare, producto.estado  FROM producto INNER JOIN cate ON producto.id_cate=cate.id_cate ';
				foreach ($db->query($sql) as $row) {
					?>
	<div class="col-md-4 product-men">
                    <div class="product-shoe-info shoe text-center">
                        <div class="men-thumb-item">
                            <img src="assets/images/subi_produc/<?php echo $row['foto']; ?>" class="img-fluid" alt="">
                            <span class="product-new-top">Nuevo</span>
                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="#"><?php echo $row['nomcate']; ?> </a>
                            </h4>


				
                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money">items</span>
                                </div>
                            </div>
                            
							
                        </div>
                    </div>
                </div>
					
					<?php 
				}
			}
			catch(PDOException $e){
				echo "Hubo un problema en la conexión: " . $e->getMessage();
			}

			//Cerrar la Conexion
			$database->close();

		?>
		
            </div>

        </div>
		<div class="ban-buttons" style="margin-left:40px;">
                
                <a href="#"  class="btn active">Ver más</a>
            </div>
    </section>
	
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
	

	
	

	<script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script>
	$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
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
