<?php
include"../../config.php";
session_start();
if(!isset($_SESSION['username']))
{
	header("location:../../login.php");
}
$nama = $_SESSION['nama'];
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.ico">
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- nalika Icon CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/nalika-icon.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- meanmenu icon CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- morrisjs CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="index.php"><img class="main-logo" src="../../images/logo.png" alt="" style="width: 10em;" /></a>
                    <strong><img src="../../assets/img/logo/logosn.png" alt="" /></strong>
                </div>
                <div class="nalika-profile">
                    <div class="profile-dtl">
                        <a href="#"><img src="https://i.pinimg.com/originals/b3/d9/bf/b3d9bf39f63768bdc4f3a5efe30f6ccb.jpg" alt="" /></a>
                        <h2> <span class="min-dtn"><?= $nama ?></span></h2>
                    </div>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li>
                                <a href="index.php?page=buku">User Management</a>
                            </li>
                            <li>
                                <a href="index.php?page=pengaduanadmin">Pengaduan Management</a>
                            </li>
                            <li>
                                <a href="../../landingpage.php">Logout</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="product-list.html"><img class="main-logo" src="assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn"></button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                              <i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
                              <span class="admin-name"><?= $nama ?></span>
                              <i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
                            </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="../../landingpage.php"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- main -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                        <?php
                          if(isset($_GET['page'])) {
                            $page = $_GET['page'] . ".php";
                            include ("$page");

                          } else {
                            include ('index.php');
                          }?>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Khoirul Gunawan & Amelia Kasrin © 2024 All Rights Reserved | <a href="#">Proyek Diskominfo</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
    ============================================ -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="assets/js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="../../assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="../../assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
    ============================================ -->
    <script src="../../assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="../../assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
    ============================================ -->
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
    ============================================ -->
    <script src="assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
    ============================================ -->
    <script src="assets/js/calendar/moment.min.js"></script>
    <script src="assets/js/calendar/fullcalendar.min.js"></script>
    <script src="assets/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="assets/js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="assets/js/main.js"></script>
</body>

</html>