<?php session_start();
header("Cache_Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache_Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Context-Type: text\html");
include('class/connection.class.php');
$con=connect();
if(isset($_SESSION['id'])){
	if($_SESSION['type']==9){
		header('location:admin/');
	}
}else{

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
		<title>PeGMa</title>

		<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<section id="logo">
		<a href="#"><img src="assets/images/logo.png" alt="" /></a>
	</section>

	<section class="container">
		<section class="row">
			<form method="post" action="authentication.php" role="login">
				<div class="form-group">
					<input type="text" name="username" placeholder="Masukkan kata nama" required class="form-control" />
					<span class="glyphicon glyphicon-user"></span>
				</div>

				<div class="form-group">
					<input type="password" name="password" placeholder="Masukkkan kata laluan" required class="form-control" />
					<span class="glyphicon glyphicon-lock"></span>
				</div>

				<div class="form-group">
					<input type="checkbox" name="remember" value="1" /> Ingat saya
				</div>

				<button type="submit" name="go" class="btn btn-block btn-primary">Log masuk</button>

				<section>
					<a href="#">Lupa kata laluan ?</a>
				</section>
			</form>
		</section>
	</section>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	</body>
	</html>
<?php }
?>