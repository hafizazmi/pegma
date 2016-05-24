<?php 
	
	require 'database.php';

	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( null==$id ) {
		header("Location: index.php");
	}
	
	if ( !empty($_POST)) {
		// keep track validation errors
		$nameError = null;
		$emailError = null;
		$mobileError = null;
		
		// keep track post values
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// validate input
		$valid = true;
		if (empty($name)) {
			$nameError = 'Please enter Name';
			$valid = false;
		}
		
		if (empty($email)) {
			$emailError = 'Please enter Email Address';
			$valid = false;
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$emailError = 'Please enter a valid Email Address';
			$valid = false;
		}
		
		if (empty($mobile)) {
			$mobileError = 'Please enter Mobile Number';
			$valid = false;
		}
		
		// update data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE pemilik  set name = ?, email = ?, mobile =? WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($name,$email,$mobile,$id));
			Database::disconnect();
			header("Location: index.php");
		}
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM pemilik where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$name = $data['name'];
		$email = $data['email'];
		$mobile = $data['mobile'];
		Database::disconnect();
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

    <div class="card card-block">

        <h3 class="card-title">Create a Customer</h3>


        <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
            <div class="form-group row">
                <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                    <label class="col-sm-2 form-control-label control-label">Name</label>
                    <div class="col-sm-10 controls">
                        <input name="name" class="form-control" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                        <?php if (!empty($nameError)): ?>
                            <span class="help-inline"><?php echo $nameError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="col-sm-2 form-control-label control-label">Email Address</label>
                    <div class="col-sm-10 controls">
                        <input name="email" class="form-control" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                        <?php if (!empty($emailError)): ?>
                            <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
                    <label class="col-sm-2 form-control-label control-label">Mobile Number</label>
                    <div class="col-sm-10 controls">
                        <input name="mobile" class="form-control" type="text"  placeholder="Mobile Number" value="<?php echo !empty($mobile)?$mobile:'';?>">
                        <?php if (!empty($mobileError)): ?>
                            <span class="help-inline"><?php echo $mobileError;?></span>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success-outline">Update</button>
                    <a class="btn btn-primary-outline" href="index.php">Back</a>
                </div>
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