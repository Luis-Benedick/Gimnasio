
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <title>GYM &mdash; BEAUTIFUL-SHOP</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/gimman.png" />
   
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../../assets/css/shop.css" type="text/css" media="all" />
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
		 background: url('../../assets/images/Loading_2.gif') 50% 50% no-repeat rgb(249,249,249);
		opacity: .8; }
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
                        <h1> <a href="../shop.php">GYM  | SHOP</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="../shop.php">Inicio</a></li>
                     
					<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle">Categorias <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
									<a href="#">Categorias <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
			
										<?php
			//incluimos el fichero de conexion
			include_once('../config/database.php');

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
            <a href="../shop.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active"> Productos</li>
    </ol>
    <!---->
    <!-- banner -->
    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-3">
            <!-- top Products -->
            <div class="row">
                <!-- product left -->
                <div class="side-bar col-lg-4">

                    <div class="search-bar w3layouts-newsletter">
                        <h3 class="sear-head">Productos</h3>
                        
                            <input id="FiltrarContenido" type="search" placeholder="Nombre del producto..."  class="form-control">
                            
                       
                    </div>
                    <!--preference -->
					
					<div class="left-side my-4 ">
                        <h3 class="sear-head">Categorías</h3>
                        <ul class="w3layouts-box-list">
						<?php
			//incluimos el fichero de conexion
			include_once('../config/database.php');

			$database = new Connection();
			$db = $database->open();
			try{	
				$sql = 'SELECT cate.id_cate, cate.nomcate FROM cate';
				foreach ($db->query($sql) as $row) {
					?>
					<li>
							
                                <input type="checkbox" class="checked">
								
                                <span class="span"><?php echo $row['nomcate']; ?></span>
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
                    </div>
					

                </div>
                
                <div class="left-ads-display col-lg-8 BusquedaRapida">
                    <div class="row">
					
					<?php
			//incluimos el fichero de conexion
			include_once('../config/database.php');

			$database = new Connection();
			$db = $database->open();
			try{	
				$sql = 'SELECT producto.id_produc, producto.nomprod,cate.nomcate, producto.descrp, producto.foto,producto.preciop, producto.canti, producto.fechare, producto.estado  FROM producto INNER JOIN cate ON producto.id_cate=cate.id_cate';
				foreach ($db->query($sql) as $row) {
					?>
					<div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="../../assets/images/subi_produc/<?php echo $row['foto']; ?>" class="img-fluid" alt="">
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="#"><?php echo $row['nomprod']; ?></a>
                                    </h4>

                                    <div class="product_price">
                                        <div class="grid-price">
                                            <span class="money">$<?php echo $row['preciop']; ?></span>
                                        </div>
                                    </div>
                                    <ul class="stars">
                                        <li>
								
								<a href="#vista_<?php echo $row["id_produc"]; ?>" title="Vista rápida" data-backdrop="false" data-toggle="modal"><span class="fa fa-eye" aria-hidden="true"></span></a>
								
								</li>
								
								<?php include('vistaModal.php'); ?>
								
								
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
					
                    <div class="grid-img-right mt-4 text-right">
                        <span class="money">Flat 50% Off</span>
                        <a href="#" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../../assets/js/jquery.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
		<script>
$(window).on('load', function () {
      setTimeout(function () {
    $(".loading").css({visibility:"hidden",opacity:"0"})
  }, 500);
     
});
</script>
	<script type="text/javascript">
$(document).ready(function () {
   (function($) {
       $('#FiltrarContenido').keyup(function () {
            var ValorBusqueda = new RegExp($(this).val(), 'i');
            $('.BusquedaRapida div').hide();
             $('.BusquedaRapida div').filter(function () {
                return ValorBusqueda.test($(this).text());
              }).show();
                })
      }(jQuery));
});
</script>
</body>

</html>
