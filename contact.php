<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Parque Zoológico Huachipa | Página Principal</title>
	<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"> -->
	<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- <script src="js/bootstrap.js"></script> -->
	<link rel="stylesheet" href="css/responsive.css">

	<link rel="stylesheet" href="css/stylesv1.css">
	<link rel="stylesheet" href="css/basicsv1.css">
	<link rel="stylesheet" href="css/headerv1.css">
	<link rel="stylesheet" href="css/specialv1.css">
	<link rel="stylesheet" href="css/footerv1.css">
</head>

<body>
	<header>
		<header>
			<div class="header">
				<div class="header__logo">
					<h1>Zoo Management System</h1>
				</div>
				<ul class="header__ul">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="animals.php">Animals</a></li>
					<li><a href="admin/index.php">Admin</a></li>
				</ul>
			</div>
			<div class="header-responsive">
				<div class="header-responsive__logo">
					<h1><a href="index.php">Zoo Management System</a></h1>
				</div>
				<ul class="header-responsive__ul">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="animals.php">Animals</a></li>
					<li><a href="admin/index.php">Admin</a></li>
				</ul>
			</div>
		</header>
	</header>
	<main>
		<div class="banner-header">
			<div class="container">
				<h2>contact</h2>
			</div>
		</div>
		<!--about-->
		<div class="content">

			<!--advantage-->
			<div class="advantages">
				<div class="container">
					<?php
					$query = mysqli_query($con, "select * from  tblpage where PageType='contactus'");
					while ($row = mysqli_fetch_array($query)) {


					?>

						<div class="advantages-grids">
							<div class="col-md-12 advantage-grid">
								<div class="company_ad">
									<h3>Contact Info</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit velit justo.</p>
									<address>
										<p>Email : <?php echo $row['Email']; ?></p>
										<p>Phone : <?php echo $row['MobileNumber']; ?></p>
										<p><?php echo $row['PageDescription']; ?></p>

									</address>
								</div>
							</div>

							<div class="clearfix"></div>
						</div>
				</div><?php } ?>
			</div>
	</main>
	<?php include_once('includes/specialv1.php'); ?>
	<?php include_once('includes/footerv1.php'); ?>
</body>

</html>