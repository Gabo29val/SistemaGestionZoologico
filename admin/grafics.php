<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['zmsaid'] == 0)) {
    header('location:logout.php');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gráficos</title>
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
        <link rel="stylesheet" href="../css/chart.css">
        <!-- modernizr css -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>


        <?php include_once('includes/sidebar.php'); ?>
        <div class="page-container">
            <div class="main-content">
                <?php include_once('includes/header.php'); ?>
                <?php include_once('includes/pagetitle.php'); ?>
                <div class="container">
                    <div class="graficos">
                        <h1 style="text-align: center;padding: 1rem 0;">Gráficas</h1>
                        <div class="wrappers">

                            <div class="wrapper">
                                <canvas id="myChart" class="chart1" width="400" height="400"></canvas>

                            </div>
                            <div class="wrapper">
                                <canvas id="myChart2" class="chart1" width="400" height="400"></canvas>

                            </div>
                            <div class="wrapper">
                                <canvas id="myChart3" class="chart1" width="400" height="400"></canvas>

                            </div>
                            <div class="wrapper">
                                <canvas id="myChart4" class="chart1" width="400" height="400"></canvas>
                            </div>
                            <div class="wrapper">
                                <canvas id="myChart0" class="chart1" width="400" height="400"></canvas>
                            </div>
                            <div class="wrapper">
                                <canvas id="myChart00" class="chart1" width="400" height="400"></canvas>
                            </div>



                            <!-- Gráfico adicional -->
                            <div class="wrapper">
                                <canvas id="myChartAdicional" class="chart1" width="400" height="400"></canvas>
                            </div>
                        </div>


                    </div>
                    <a href="dashboard.php" class="btn btn-primary">Regresar</a>
                </div>





            </div>
            <!-- main content area end -->
            <!-- footer area start-->
            <?php include_once('includes/footer.php'); ?>
            <!-- footer area end-->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.0/dist/chart.min.js"></script>
        <script>
            const data1 = {
                labels: ['Extranjero'],
                datasets: [{
                        label: 'Adulto',
                        data: [`<?php
                                //Yesterday Foreigner adult visitors
                                $query = mysqli_query($con, "select sum(NoAdult) as totaladulty from tblticforeigner where date(PostingDate)=CURDATE()-1");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_visitors = $result['totaladulty'];
                                echo $count_Yest_visitors;
                                ?>`],
                        borderColor: '#FC001E',
                        backgroundColor: '#FC001E',

                    },
                    {
                        label: 'Niño',
                        data: [`<?php
                                //Yesterday Foreigner children visitors
                                $query = mysqli_query($con, "select sum(NoChildren) as totalchildy from tblticforeigner where date(PostingDate)=CURDATE()-1");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_cvisitors = $result['totalchildy'];
                                echo $count_Yest_cvisitors;
                                ?>`],
                        borderColor: ' #09A0FF ',
                        backgroundColor: ' #09A0FF ',
                    }
                ]
            }
            var ctx2 = document.getElementById('myChart').getContext('2d');
            var myChart2 = new Chart(ctx2, {
                type: 'bar',
                data: data1,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Ticket Extranjero - Ayer ',
                            font: {
                                size: 20
                            }
                        }
                    }


                }
            });
        </script>
        <script>
            const data2 = {
                labels: ['Extranjero'],
                datasets: [{
                        label: 'Adulto',
                        data: [`<?php
                                //todays Foreigner adult visitors
                                $query = mysqli_query($con, "select sum(NoAdult) as totaladult from tblticforeigner where date(PostingDate)=CURDATE()");
                                $result = mysqli_fetch_array($query);
                                $count_today_visitors = $result['totaladult'];
                                echo $result['totaladult'];
                                ?>`],
                        borderColor: ' #FC001E ',
                        backgroundColor: '#FC001E ',

                    },
                    {
                        label: 'Niño',
                        data: [`<?php
                                //todays Foreigner children visitors
                                $query = mysqli_query($con, "select sum(NoChildren) as totalchild from tblticforeigner where date(PostingDate)=CURDATE()");
                                $result = mysqli_fetch_array($query);
                                $count_today_cvisitors = $result['totalchild'];
                                echo $count_today_cvisitors
                                ?>`],
                        borderColor: ' #09A0FF ',
                        backgroundColor: ' #09A0FF ',
                    }
                ]
            }

            var ctx = document.getElementById('myChart2').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: data2,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        scales: {
                            y: {
                                suggestedMin: 50,
                                suggestedMax: 100
                            }
                        },
                        title: {
                            display: true,
                            text: 'Ticket Extranjero - Hoy ',
                            font: {
                                size: 20
                            }
                        }

                    }


                }
            });
        </script>
        <script>
            const data3 = {
                labels: ['Normal'],
                datasets: [{
                        label: 'Adulto',
                        data: [`<?php
                                $query = mysqli_query($con, "select sum(NoAdult) as totaladulty from tblticindian where date(PostingDate)=CURDATE()-1");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_visitors = $result['totaladulty'];
                                echo $count_Yest_visitors
                                ?>`],
                        borderColor: ' #FC001E ',
                        backgroundColor: ' #FC001E ',

                    },
                    {
                        label: 'Niño',
                        data: [`<?php
                                $query = mysqli_query($con, "select sum(NoChildren) as totalchildy from tblticindian where date(PostingDate)=CURDATE()-1");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_cvisitors = $result['totalchildy'];
                                echo $count_Yest_cvisitors
                                ?>`],
                        borderColor: ' #09A0FF ',
                        backgroundColor: ' #09A0FF ',
                    }
                ]
            }

            var ctx = document.getElementById('myChart3').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: data3,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Ticket Normal - Ayer ',
                            font: {
                                size: 20
                            }
                        }
                    }


                }
            });
        </script>
        <script>
            const data4 = {
                labels: ['Normal'],
                datasets: [{
                        label: 'Adulto',
                        data: [`<?php
                                $query = mysqli_query($con, "select sum(NoAdult) as totaladulty from tblticindian where date(PostingDate)=CURDATE()");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_visitors = $result['totaladulty'];
                                echo $count_Yest_visitors
                                ?>`],
                        borderColor: '#FC001E ',
                        backgroundColor: ' #FC001E ',

                    },
                    {
                        label: 'Niño',
                        data: [`<?php
                                $query = mysqli_query($con, "select sum(NoChildren) as totalchildy from tblticindian where date(PostingDate)=CURDATE()");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_cvisitors = $result['totalchildy'];
                                echo $count_Yest_cvisitors
                                ?>`],
                        borderColor: ' #09A0FF ',
                        backgroundColor: ' #09A0FF ',
                    }
                ]
            }

            var ctx = document.getElementById('myChart4').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: data4,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Ticket Normal - Hoy ',
                            font: {
                                size: 20
                            }
                        }
                    }


                }
            });

            const data0 = {
                labels: ['Total'],
                datasets: [{
                        label: 'Normal-Adulto',
                        data: [`<?php
                                $query = mysqli_query($con, "SELECT SUM(NoAdult) AS suma FROM tblticindian;");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_cvisitors = $result['suma'];
                                echo $count_Yest_cvisitors;
                                ?>`],
                        borderColor: '#5499C7',
                        backgroundColor: '#5499C7',
                    },
                    {
                        label: 'Normal-Niño',
                        data: [`<?php
                                $query = mysqli_query($con, "SELECT SUM(NoChildren) AS suma FROM tblticindian;");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_cvisitors = $result['suma'];
                                echo $count_Yest_cvisitors;
                                ?>`],
                        borderColor: '#1ABC9C',
                        backgroundColor: '#1ABC9C',
                    },
                    {
                        label: 'Extranjero-Adulto',
                        data: [`<?php
                                $query = mysqli_query($con, "SELECT SUM(NoAdult) AS suma FROM tblticforeigner;");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_cvisitors = $result['suma'];
                                echo $count_Yest_cvisitors;
                                ?>`],
                        borderColor: '#F39C12',
                        backgroundColor: '#F39C12',
                    },
                    {
                        label: 'Extranjero-Niño',
                        data: [`<?php
                                $query = mysqli_query($con, "SELECT SUM(NoChildren) AS suma FROM tblticforeigner;");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_cvisitors = $result['suma'];
                                echo $count_Yest_cvisitors;
                                ?>`],
                        borderColor: '#8E44AD',
                        backgroundColor: '#8E44AD',
                    }


                ]
            }
            var ctx0 = document.getElementById('myChart0').getContext('2d');
            var myChart0 = new Chart(ctx0, {
                type: 'bar',
                data: data0,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Tickets totales',
                            font: {
                                size: 20
                            }
                        }
                    },
                    scales: {
                        y: {
                            suggestedMin: 50,
                            suggestedMax: 100
                        }
                    }


                }
            });

            var ctx00 = document.getElementById('myChart00').getContext('2d');
            var myChart00 = new Chart(ctx00, {
                type: 'pie',
                data: {
                    labels: ['Normal-Adulto', 'Normal-Niño', 'Extranjero-Adulto', 'Extranjero-Niño'],
                    datasets: [{
                        label: 'Tickets totales',
                        data: [
                            `<?php
                                $query = mysqli_query($con, "SELECT SUM(NoAdult) AS suma FROM tblticindian;");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_cvisitors = $result['suma'];
                                echo $count_Yest_cvisitors;
                                ?>`,
                            `<?php
                                $query = mysqli_query($con, "SELECT SUM(NoChildren) AS suma FROM tblticindian;");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_cvisitors = $result['suma'];
                                echo $count_Yest_cvisitors;
                                ?>`,
                            `<?php
                                $query = mysqli_query($con, "SELECT SUM(NoAdult) AS suma FROM tblticforeigner;");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_cvisitors = $result['suma'];
                                echo $count_Yest_cvisitors;
                                ?>`,
                            `<?php
                                $query = mysqli_query($con, "SELECT SUM(NoChildren) AS suma FROM tblticforeigner;");
                                $result = mysqli_fetch_array($query);
                                $count_Yest_cvisitors = $result['suma'];
                                echo $count_Yest_cvisitors;
                                ?>`
                        ],
                        backgroundColor: [
                            '#6CC4FF',
                            '#23FFD4',
                            '#FFC38B',
                            '#D164FF'
                        ],
                        borderColor: [
                            '#5499C7',
                            '#1ABC9C',
                            '#F39C12',
                            '#8E44AD'
                        ],
                        borderWidth: 5
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Tickets totales',
                            font: {
                                size: 20
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>

        <!-- Ultimo grafico -->
        <script>
            const data6 = {
                labels: ['Ticket N-Adulto', 'Ticket N-Niño', 'Ticket E-Adulto', 'Ticket E-Niño'],
                    datasets: [{
                        label: 'Tickets totales',
                        data: [
                            `<?php
                                $query = mysqli_query($con, "SELECT SUM(NoAdult) AS suma FROM tblticindian;");
                                $result = mysqli_fetch_array($query);
                                $cantNormAdult = $result['suma'];
                                echo $cantNormAdult;
                                ?>`,
                            `<?php
                                $query = mysqli_query($con, "SELECT SUM(NoChildren) AS suma FROM tblticindian;");
                                $result = mysqli_fetch_array($query);
                                $cantNormNiño = $result['suma'];
                                echo $cantNormNiño;
                                ?>`,
                            `<?php
                                $query = mysqli_query($con, "SELECT SUM(NoAdult) AS suma FROM tblticforeigner;");
                                $result = mysqli_fetch_array($query);
                                $cantExtAdult = $result['suma'];
                                echo $cantExtAdult;
                                ?>`,
                            `<?php
                                $query = mysqli_query($con, "SELECT SUM(NoChildren) AS suma FROM tblticforeigner;");
                                $result = mysqli_fetch_array($query);
                                $cantExtNiño = $result['suma'];
                                echo $cantExtNiño;
                                ?>`
                        ],
                        backgroundColor: [
                            '#82DE36',
                            '#E6EC1B',
                            '#2C6639',
                            '#08299A'
                        ],
                        borderColor: [
                            '#F39C12',
                            '#5499C7',
                            '#1ABC9C',
                            '#445244'
                        ],
                        borderWidth: 3
                    }]
            }

            var ctx6 = document.getElementById('myChartAdicional').getContext('2d');
            var myChart = new Chart(ctx6, {
                type: 'doughnut',
                data: data6,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Gráfico con total de tickets'
                        }
                    }
                },
            });
            /*
            const config = {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Chart.js Line Chart'
                        }
                    }
                },
            };
            */
        </script>


        <!-- page container area end -->
        <!-- offset area start -->

        <!-- offset area end -->
        <!-- jquery latest version -->
        <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
        <!-- bootstrap 4 js -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        <script src="assets/js/jquery.slicknav.min.js"></script>

        <!-- start chart js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <!-- start highcharts js -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <!-- start zingchart js -->
        <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
        <script>
            zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
            ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
        </script>
        <!-- all line chart activation -->
        <script src="assets/js/line-chart.js"></script>
        <!-- all bar chart activation -->
        <script src="assets/js/bar-chart.js"></script>
        <!-- all pie chart -->
        <script src="assets/js/pie-chart.js"></script>
        <!-- others plugins -->
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>

    </html>
<?php }  ?>