<?php include('../config.php'); ?>
<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>LLAJTA TOUR</title>
	<meta charset="UTF-8">
	<meta name="description" content="loans HTML Template">
	<meta name="keywords" content="loans, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap," rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/all.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<a href="home.php" class="site-logo">
			<img src="img/logoBC.png" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="index.html" class="active">Inicio</a></li>
				<li><a href="index.html">Acerca de nosotros</a></li>
				<li><a href="#">Lugares</a>	
					<ul class="sub-menu">
						<li><a href="provincias.html">Balnearios</a></li>
						<li><a href="index.html">Centros Culturales</a></li>
						<li><a href="index.html">Cines/Teatros</a></li>
						<li><a href="index.html">Plazas</a></li>
						<li><a href="Parques.php">Parques</a></li>
						<li><a href="provincias.html">Iglesias</a></li>
						<li><a href="index.html">Museos</a></li>
						<li><a href="experiencias.html">Restaurantes</a></li>
						<li><a href="galeria.html">Universidades</a></li>
						<li><a href="galeria.html">Instituciones</a></li>
					</ul>
				</li>
				<li><a href="#">Ajustes</a>	
					<ul class="sub-menu">
						<li><a href="IUsuario.php">Cuenta</a></li>
						<li><a href="logout.php">Cerrar Sesión</a></li>
						
					</ul>
				</li>
			</ul>
			<!-- 
			<div class="header-right">
				<a href="#" class="hr-btn"><i class="flaticon-029-telephone-1"></i>Emergencia</a>
				<div class="hr-btn hr-btn-2">+45 332 65767 42</div>
			</div>
			-->
		</nav>
	</header>

	<!-- Header Section end -->

	<!-- Hero Section end -->
	<section class="hero-section">
		
		<div class="container">
			<div class="row">
				<!--<div class="col-lg-6">
					<div class="hs-text">
						<h1>Inicia tu aventura</h1>
						<p>Recorre la ciudad mas bella de Bolivia de la manera mas sencilla y comoda</p>
						<a href="#" class="site-btn sb-dark">Find out more</a>
					</div>
				</div>-->
				<!--<script type="text/javascript">
					$("#categoria").on('input', function () {
   						var val=$('#categoria').val();
   						var ejemplo = $('#categoria').find('option[value="'+val+'"]').data('ejemplo');
   						return ejemplo;
					});		
				</script>-->
					
				<div class="col-lg-12 col-md-5 col-xs-12 col-sm-12">
					<div class="container-form">
						<form method="POST" action="buscar.php">
							<div class="form-group">
                      			<label for="exampleSelect1" style="color: white"><h3>Categoria</h3></label>
                      			<br>
                      			<select class="form-control" id="exampleSelect1" name="categoria">                        
                        		<?php
                          		$query = $mysqli -> query ("SELECT * FROM Categoria");
                          		while ($valores = mysqli_fetch_array($query)) {
                          		echo '<option value="'.$valores[idCategoria].'">'.$valores[nombreCategoria].'</option>';
                          		}
                        		?>
                     			 </select>
                      			<br>
                      			<button type="submit" class="btn btn-primary" name="buscar" style="width: 100%">Buscar</button>
                    		</div>
                    	</form>
					</div>
				</div>				 
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/hero-slider/cochabamba.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/alalay1.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/Angostura.jpg"></div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<a href="index.html" class="footer-logo">
				<img src="img/logoBC.png" alt="">
			</a>
			<h1> Bienvenido: <?php echo $row['nombres'];?></h1>
			<!-- 
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>What we do</h2>
						<ul>
							<li><a href="#">Loans</a></li>
							<li><a href="#">Car loans</a></li>
							<li><a href="#">Debt consolidation loans</a></li>
							<li><a href="#">Home improvement loans</a></li>
							<li><a href="#"> Wedding loans</a></li>
							<li><a href="#">Innovative Finance ISA</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>About us</h2>
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Our story</a></li>
							<li><a href="#">Meet the board</a></li>
							<li><a href="#">Meet the leadership team</a></li>
							<li><a href="#">Awards</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Legal</h2>
						<ul>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Loans2go principles</a></li>
							<li><a href="#">Website terms</a></li>
							<li><a href="#">Cookie policy</a></li>
							<li><a href="#">Conflicts policy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Site Info</h2>
						<ul>
							<li><a href="#">Support</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Sitemap</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
			-->
			<div class="social-links">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-pinterest"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
			<br>
			<br>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Llajta Tour
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
