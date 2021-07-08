<?php

include('includes/dbconnection.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Tickets</title>
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
        <link rel="stylesheet" href="css/wsp.css">

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
</head>

<body class="fondo2">
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
    <div class="slide slide-tarifa">
        <div class=" slide-content content-tarifa">
            <h1>Conoce Nuestras Tarifas</h1>
        </div>
    </div>
    <main>
        <section class="tarifa">
            <h2>El zoológico está abierto de lunes a domingo</h2>
            <h3> Horario de atención: 9:00 am. a 5:30 pm.</h3>
            <div class="cont-table">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Número</th>
                            <th>Tipo de Tarifa</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <?php
                    $ret = mysqli_query($con, "select * from tbltickettype");
                    $cnt = 1;
                    while ($row = mysqli_fetch_array($ret)) {

                    ?>
                        <tbody>
                            <tr class="tr-body">
                                <td><?php echo $cnt; ?></td>

                                <td><?php echo $row['TicketType']; ?></td>
                                <td> S/ <?php echo $row['Price']; ?></td>
                            </tr>
                        <?php
                        $cnt = $cnt + 1;
                    } ?>
                        </tbody>
                </table>
                <div class="cont-p">
                    <p>Puedes adquirir tus entradas de forma presencial en el zoológico.</p>

                    <p>*Recomendamos que todos nuestros visitantes porten su DNI. </p>
                </div>


            </div>
        </section>
        <section class="reserva">
            <h2>¡Reserva para Familia y Amigos!</h2>

            <div class="cont-form">
                <h3>Rellena tus datos y nos pondremos en contacto contigo</h3>
                <form action="#" class="form-reserva">
                    <div class="c-input">
                        <input type="text" placeholder="Nombres">
                    </div>
                    <div class="c-input">
                        <input type="text" placeholder="Apellidos">
                    </div>
                    <div class="c-input">
                        <input type="text" placeholder="Telefono">
                    </div>
                    <div class="c-input">
                        <input type="email" placeholder="Correo">
                    </div>
                    <div>
                        <input type="submit" value="Registrar" class="btn-submit">
                    </div>
                </form>
            </div>
            <div class="cont-wsp">
                <h3>También puedes escribirnos a nuestro Whatsapp y responderemos tus dudas</h3>
                <div class="number">
                    <?php
                    $query = mysqli_query($con, "select * from  tblpage where PageType='contactus'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <p class="number-text"> <?php echo $row['MobileNumber']; ?></p>
                    <?php } ?>
                    <div class="number-icon">
                        <!--Agregando wsp-->
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                        <a href="https://api.whatsapp.com/send?phone=+51%20995569097" class="float" target="_blank">
                        <i class="fa fa-whatsapp my-float"></i>
                        </a>
                    </div>
                </div>
                <p align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.413434245683!2d-76.9004834856184!3d-12.015033044581292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c3ea5aaaaaab%3A0x920e09bb0b6c28fd!2sParque%20Zool%C3%B3gico%20Huachipa!5e0!3m2!1ses!2spe!4v1625697204715!5m2!1ses!2spe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
            </div>
        </section>

    </main>
    <?php include_once('includes/specialv1.php'); ?>
    <?php include_once('includes/footerv1.php'); ?>
</body>

</html>