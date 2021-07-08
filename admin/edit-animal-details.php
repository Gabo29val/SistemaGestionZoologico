<?php
session_start();
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['zmsaid'] == 0)) {
    header('location:logout.php');
} else {
    if (isset($_POST['submit'])) {
        $aniid = $_GET['editid'];
        $aname = $_POST['aname'];
        $breed = $_POST['breed'];
        $desc = $_POST['desc'];

        $scname = $_POST['scname'];
        $feeding = $_POST['feeding'];
        $socialLife = $_POST['socialLife'];

        $repro = $_POST['repro'];
        $sConversation = $_POST['sConversation'];

        $query = mysqli_query($con, "update tblanimal set AnimalName='$aname',Breed='$breed', Description='$desc',ScientificName='$scname',Feeding='$feeding',Reproduction='$socialLife',SocialLife='$repro',StateOfConservation='$sConversation'where ID='$aniid'");
        if ($query) {

            echo '<script>alert("Animal detail has been Updated.")</script>';
        } else {

            echo '<script>alert("Something Went Wrong. Please try again.")</script>';
        }
    }


?>
    <!doctype html>
    <html class="no-js" lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Editar detalles del animal - Sistema de Gestión de Zoológico</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/metisMenu.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.min.css">
        <!-- amchart css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <!-- others css -->
        <link rel="stylesheet" href="assets/css/typography.css">
        <link rel="stylesheet" href="assets/css/default-css.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- modernizr css -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
        </script>
    </head>

    <body>

        <!-- page container area start -->
        <div class="page-container">
            <!-- sidebar menu area start -->
            <?php include_once('includes/sidebar.php'); ?>
            <!-- sidebar menu area end -->
            <!-- main content area start -->
            <div class="main-content">
                <!-- header area start -->
                <?php include_once('includes/header.php'); ?>
                <!-- header area end -->
                <!-- page title area start -->
                <?php include_once('includes/pagetitle.php'); ?>
                <!-- page title area end -->
                <div class="main-content-inner">
                    <div class="row">

                        <div class="col-lg-12 col-ml-12">
                            <div class="row">
                                <!-- basic form start -->
                                <div class="col-12 mt-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Actualizar detalles del animal</h4>
                                            <form method="post" enctype="multipart/form-data">
                                                <?php
                                                $aniid = $_GET['editid'];
                                                $ret = mysqli_query($con, "select * from tblanimal where ID='$aniid'");
                                                $cnt = 1;
                                                while ($row = mysqli_fetch_array($ret)) {

                                                ?>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nombre del animal</label>
                                                        <input type="text" class="form-control" id="aname" name="aname" aria-describedby="emailHelp" placeholder="Ingrese nombre del animal" value="<?php echo $row['AnimalName']; ?>" required="true">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Imagen del animal</label>
                                                        <img src="images/<?php echo $row['AnimalImage']; ?>" width="100" height="100"> <a href="changeimage.php?editid=<?php echo $row['ID']; ?>"> &nbsp; Editar imagen</a>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nombre científico</label>
                                                        <input type="text" class="form-control" id="scname" name="scname" aria-describedby="emailHelp" placeholder="Ingrese nombre científico del animal" value="<?php echo $row['ScientificName']; ?>" required="true">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Número de jaula</label>
                                                        <input type="text" class="form-control" id="cnum" name="cnum" aria-describedby="emailHelp" placeholder="Ingrese número de jaula" value="<?php echo $row['CageNumber']; ?>" readonly="true" maxlength="5">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Número de alimentación</label>
                                                        <input type="text" class="form-control" id="fnum" name="fnum" aria-describedby="emailHelp" placeholder="Ingrese número de alimentación" value="<?php echo $row['FeedNumber']; ?>" readonly="true" maxlength="6">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Clase</label>
                                                        <input type="text" class="form-control" id="breed" name="breed" aria-describedby="emailHelp" placeholder="Ingrese clase" value="<?php echo $row['Breed']; ?>" required="true">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Descripción</label>
                                                        <input type="text" class="form-control" id="desc" name="desc" aria-describedby="emailHelp" placeholder="Ingrese descripción del animal" value="<?php echo $row['Description']; ?>" required="true">
                                                    </div>





                                                    <div class="form-group">
                                                        <label for="feeding">Alimentación</label>
                                                        <input type="text" class="form-control" id="feeding" name="feeding" aria-describedby="emailHelp" placeholder="Ingresar alimentación del animal" value="<?php echo $row['Feeding']; ?>" required="true">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="repro">Reproducción</label>
                                                        <input type="text" class="form-control" id="repro" name="repro" aria-describedby="emailHelp" placeholder="Ingresar reproducción del animal" value="<?php echo $row['Reproduction']; ?>" required="true">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="socialLife">Vida social</label>
                                                        <input type="text" class="form-control" id="socialLife" name="socialLife" aria-describedby="emailHelp" placeholder="Ingrese vida social del animal" value="<?php echo $row['SocialLife']; ?>" required="true">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="sConversation">Estado de conservación</label>
                                                        <input type="text" class="form-control" id="sConversation" name="sConversation" aria-describedby="emailHelp" placeholder="Ingrese estado de conservación del animal" value="<?php echo $row['StateOfConservation']; ?>" required="true">
                                                    </div>
                                                <?php } ?>
                                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" name="submit">Actualizar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- basic form end -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main content area end -->
            <!-- footer area start-->
            <?php include_once('includes/footer.php'); ?>
            <!-- footer area end-->
        </div>
        <!-- page container area end -->
        <!-- offset area start -->

        <!-- jquery latest version -->
        <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
        <!-- bootstrap 4 js -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        <script src="assets/js/jquery.slicknav.min.js"></script>

        <!-- others plugins -->
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>

    </html>
<?php }  ?>