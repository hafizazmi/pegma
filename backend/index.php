
<?php 
    session_start();
    header("Cache_Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache_Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header("Context-Type: text/html");
    include('dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

<!--    facicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="static/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="static/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="static/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="static/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="static/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="static/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="static/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="static/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="static/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="static/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="static/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="static/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="static/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="static/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>PeGMa</title>

    <!-- Bootstrap core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/css/signin.css" rel="stylesheet">
    <link href="static/css/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>

<div class="pos-f-t">

    <nav class="navbar navbar-light navbar-static-top bg-faded">
        <div class="container">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                <a class="navbar-brand" href="index.php">PeGMa</a>
            </div>
        </div>
    </nav>
</div>

<div class="container">

    <form class="form-signin" action="login.php" method="post">
        <h2 class="form-signin-heading">Sila Log Masuk</h2>
        <label for="inputUsername" class="sr-only">Katanama</label>
        <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Katanama" required autofocus>
        <label for="inputPassword" class="sr-only">Katalaluan</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Katalaluan" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Ingat Saya
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log Masuk</button>
    </form>

</div> <!-- /container -->

<footer class="footer">
    <div class="container">
        <span class="text-muted">PeGMa</span>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>
</html>