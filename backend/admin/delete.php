<?php 
	require 'database.php';
	$id = 0;
	
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( !empty($_POST)) {
		// keep track post values
		$id = $_POST['id'];
		
		// delete data
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM pemilik  WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		Database::disconnect();
		header("Location: index.php");
		
	} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include('../include/head.php');
	?>
</head>
<body>

<div class="pos-f-t">
	<?php include('../include/navbar.php'); ?>
</div>

<div class="container">
	<div class="page-header m-t-1">
		<h1>Dashboard</h1>
	</div>

	<div class="span10 offset1">
		<div class="row">
			<h3>Delete a Customer</h3>
		</div>

		<form class="form-horizontal" action="delete.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id;?>"/>
			<p class="alert alert-error">Are you sure to delete ?</p>
			<div class="form-actions">
				<button type="submit" class="btn btn-danger-outline">Yes</button>
				<a class="btn btn-primary-outline" href="index.php">No</a>
			</div>
		</form>
	</div>

</div>







<?php
include('../include/footer.php');
?>




<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>
</html>
