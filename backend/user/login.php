<?php session_start();
header("Cache_Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache_Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Context-Type: text\html");
include('../class/connection.class.php');
$con=connect();
include('open_link.php');
if(isset($_SESSION['id'])){
if($_SESSION['type']==9){
?>
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Title -->
    <title>Gates IT Solution</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
</head>
<body>
<div id="body-bg">
    <!-- Phone/Email -->
    <div id="pre-header" class="background-gray-lighter">
        <div class="container no-padding">
            <div class="row hidden-xs">
                <div class="col-sm-6 padding-vert-5">
                    <strong>Tel:</strong>&nbsp;
                </div>
                <div class="col-sm-6 text-right padding-vert-5">
                    <strong>Email:</strong>&nbsp;
                </div>
            </div>
        </div>
    </div>
    <!-- End Phone/Email -->
    <!-- Header -->

    <!-- End Header -->
    <!-- Top Menu -->
    <div id="hornav" class="bottom-border-shadow">
        <div class="container no-padding border-bottom">
            <div class="row">
                <div class="col-md-8 no-padding">
                    <div class="visible-lg">
                        <ul id="hornavmenu" class="nav navbar-nav">
                            <li>
                                <a href="index.html" class="fa-home active">Home</a>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-md-4 no-padding">
                    <ul class="social-icons pull-right">
                        <li class="social-twitter">
                            <a href="#" target="_blank" title="Twitter"></a>
                        </li>
                        <li class="social-facebook">
                            <a href="#" target="_blank" title="Facebook"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Menu -->
    <!-- === END HEADER === -->
    <!-- === BEGIN CONTENT === -->
    <div id="content">
        <div class="container background-white">
            <div class="container">
                <div class="row margin-vert-30">
                    <!-- Login Box -->
                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                        <form class="login-page">
                            <div class="login-header margin-bottom-30">
                                <h2>Login Account</h2>
                            </div>
                            <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                <input placeholder="Username" class="form-control" type="text">
                            </div>
                            <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                <input placeholder="Password" class="form-control" type="password">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Stay signed in</label>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary pull-right" type="submit">Login</button>
                                </div>
                            </div>
                            <hr>
                            <h4>Forget your Password ?</h4>
                            <p>
                                <a href="#">Click here</a> to reset your password.</p>
                        </form>
                    </div>
                    <!-- End Login Box -->
                </div>
            </div>
        </div>
    </div>
    <!-- === END CONTENT === -->
    <!-- === BEGIN FOOTER === -->
    <?php include('include/footer.php'); ?>
    <!-- Footer -->
    <div id="footer" class="background-grey">
        <div class="container">
            <div class="row">
                <!-- Footer Menu -->
                <div id="footermenu" class="col-md-8">

                </div>
                <!-- End Footer Menu -->
                <!-- Copyright -->
                <div id="copyright" class="col-md-4">
                    <p class="pull-right">Ownership by : 2015 Pusat TeknoUsahawan UTHM</p>
                </div>
                <!-- End Copyright -->
            </div>
        </div>
    </div>
    <!-- End Footer -->
    <!-- JS -->
    <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    <!-- Isotope - Portfolio Sorting -->
    <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
    <!-- Mobile Menu - Slicknav -->
    <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
    <!-- Animate on Scroll-->
    <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
    <!-- Sticky Div -->
    <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
    <!-- Slimbox2-->
    <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
    <!-- Modernizr -->
    <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
    <!-- End JS -->
</div>
</body>
</html>

    <?php
}else{
    header('location:../');
}
}else{
    header('location:../');
}?>