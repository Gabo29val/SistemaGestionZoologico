<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Zoologico Elegante | Página Principal</title>
	<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"> -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
	<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/stylesv1.css">
	<link rel="stylesheet" href="css/basicsv1.css">
	<link rel="stylesheet" href="css/headerv1.css">
	<link rel="stylesheet" href="css/specialv1.css">
	<link rel="stylesheet" href="css/footerv1.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/hamburguesa.css">
	<link rel="stylesheet" href="css/animaciones.css">

	<link rel="stylesheet" href="css/stylesv2.css">

	<!-- <script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script> -->
	<!-- <script src="js/bootstrap.js"></script> -->
</head>

<body class = "fondo2">
	<header>
		<div class="header">
			<div class="header__logo">
				<h1>Parque Zoológico Huachipa</h1>
			</div>
			<ul class="header__ul">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="animals.php">Animales</a></li>
				<li><a href="tickets.php">Tickets</a></li>
				<li><a href="admin/index.php">Admin</a></li>
			</ul>
		</div>
		<div class="hamburguer-menu">
			<div class="fb">
				<label for="btn-menu" class="abrir-menu"> <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill:white;">
						<path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z"></path>
					</svg></label>
			</div>
			<input type="checkbox" id="btn-menu" />
			<div class="fb-c" id="menu">
				<nav>
					<a href="index.php">Inicio</a>
					<a href="animals.php">Animales</a>
					<a href="tickets.php">Tickets</a>
					<a href="admin/index.php">Admin</a>
				</nav>
				<label for="btn-menu">x</label>
			</div>
		</div>
	</header>
	<div class="owl-carousel owl-theme">
		<div class="slide slide1">
			<div class="slide-content">
				<h1>Bienvenido al Zoológico Huachipa</h1>
				<a class="link_slide" href="#animals">Ver algunos animales</a>
			</div>
		</div>
		<div class="slide slide2">
			<div class="slide-content">
				<h1>Una experencia inolvidable conociendo nuevas especies!</h1>
				<a class="link_slide" href="animals.php">Buscar animales</a>

			</div>
		</div>
		<div class="slide slide3">
			<div class="slide-content">
				<h1>¿Que esperas para venir?</h1>
				<a class="link_slide" href="tickets.php">Conoce nuestros precios</a>

			</div>
		</div>

	</div>

	<!-- <div class="banner">
		<div class="banner-container">
			<h1>Visit to a Zoo</h3>
				<p> A visit to a zoo offers us an opportunity to see the wild animals.Zoo is a place where we can see different animals and birds at one place. It has great attraction particularly for the children. A visit to a zoo gives us both information and entertainment. We come to learn about the rare species.</p>
		</div>
	</div>
	<div class="banner2">
		<div class="banner2-content">
			<h2>Vestibulum sagittis</h2>
			<p>Donec dui velit, hendrerit id pharetra nec, posuere porta nisl. Donec magna nulla, commodo in ultrices faucibus lacus aliquet.
				Donec dui velit, hendrerit id pharetra nec, posuere porta nisl. Donec magna nulla, commodo in ultrices faucibus lacus aliquet.</p>
		</div>
		<div class="banner2-content">
			<h2>Itaque Earum Rerum</h2>
			<p>Donec dui velit, hendrerit id pharetra nec, posuere porta nisl. Donec magna nulla, commodo in ultrices faucibus lacus aliquet.
				Donec dui velit, hendrerit id pharetra nec, posuere porta nisl. Donec magna nulla, commodo in ultrices faucibus lacus aliquet.</p>
		</div>
	</div> -->
	<main>
		<section>
			<div class="" id="animals">
				<h2>Échale un vistazo</h2>
				<div class="animals-grids">

					<?php
					$query = mysqli_query($con, "select * from tblanimal order by rand() limit 4");
					$i = 0;
					while ($row = mysqli_fetch_array($query)) {
						$i++;
					?>
						<div class="<?php echo "cont" . $i; ?> tarjeta-animales">
							<div class="cont-img">
								<img src="admin/images/<?php echo $row['AnimalImage']; ?>" />
							</div>

							<div class="cont-text">
								<h4><a class="animal-title" href="animal-detail.php?anid=<?php echo $row['ID']; ?>"><?php echo $row['AnimalName']; ?>(<?php echo $row['Breed']; ?>)</a></h4>
								<p style="color:black" class="animal-description"><?php echo substr($row['Description'], 0, 100); ?>.</p>
								<!-- <a class="animal-extends" href="animal-detail.php?anid=<?php echo $row['ID']; ?>">See more</a> -->
								<!-- <p class=" animal-description"><?php echo $row['Description'] ?>.</p> -->

							</div>
						</div><?php }
								?>
				</div>
			</div>
		</section>
		<!-- <section class="carousel"> se usara otro carrousel but ya lo hago otro dia v:
			<h3>Animals</h3>
			<div class="owl-carousel owl-theme">
				<?php
				$query = mysqli_query($con, "select * from tblanimal order by rand() limit 8");
				while ($row = mysqli_fetch_array($query)) {
				?>
					<div class="item"><img src="admin/images/<?php echo $row['AnimalImage']; ?>" /></div><?php } ?>
			</div>

		</section> -->
		<section>
			<div class="aboutUs">
				<?php
				$query = mysqli_query($con, "select * from  tblpage where PageType='aboutus'");
				while ($row = mysqli_fetch_array($query)) {


				?>
					<h3><?php echo $row['PageTitle']; ?></h3>
					<p><?php echo $row['PageDescription']; ?>.</p>
				<?php } ?>
			</div>
		</section>
	</main>
	<?php include_once('includes/specialv1.php'); ?>
	<?php include_once('includes/footerv1.php'); ?>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="owlcarousel/owl.carousel.min.js"></script>
	<script>
		$(".owl-carousel").owlCarousel({
			items: 1,
			loop: true,

			autoplay: true,
			autoplaySpeed: 1000,
			smartSpeed: 1500,
			autoplayHoverPause: true,


		});
	</script>
	<!-- <script type="text/javascript">
		$(".owl-carousel").owlCarousel({
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true,
			autoHeight: true,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 2,
				},
				1000: {
					items: 4,
				}
			}
		});
	</script> -->

</body> 

</html>