<?php

require 'database.php';

if ( !empty($_POST)) {
    // keep track validation errors
    $nameError = null;
    $mobileError = null;
    $typeError = null;

    // keep track post values
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $type = $_POST['type'];

    // validate input
    $valid = true;
    if (empty($name)) {
        $nameError = 'Sila masukkan kata name';
        $valid = false;
    }

    if (empty($mobile)) {
        $mobileError = 'Sila masukkan kata laluan';
        $valid = false;
    }

    if (empty($type)) {
        $typeError = 'Sila masukkan mata demerit';
        $valid = false;
    }

    // insert data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO pengguna (username,password,type) values(?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($name,$mobile,$type));
        Database::disconnect();
        header("Location: index.php");
    }
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
        <h1>Pengguna</h1>
    </div>

    <div class="card card-block">

        <h3 class="card-title">Tambah Pengguna</h3>


        <form class="form-horizontal" action="create.php" method="post">
            <div class="form-group row">
                <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                    <label class="col-sm-2 form-control-label control-label">Kata Nama</label>
                    <div class="col-sm-4 controls">
                        <input name="name" class="form-control " type="text"  placeholder="Kata nama" value="<?php echo !empty($name)?$name:'';?>">
                        <?php if (!empty($nameError)): ?>
                            <span class="help-inline"><?php echo $nameError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
                    <label class="col-sm-2 form-control-label control-label">Kata laluan</label>
                    <div class="col-sm-4 controls">
                        <input name="mobile" class="form-control" type="text"  placeholder="Kata Laluan" value="<?php echo !empty($mobile)?$mobile:'';?>">
                        <?php if (!empty($mobileError)): ?>
                            <span class="help-inline"><?php echo $mobileError;?></span>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="control-group <?php echo !empty($typeError)?'error':'';?>">
                    <label class="col-sm-2 form-control-label control-label">Jenis pengguna</label>
                    <div class="col-sm-4 controls">
                        <input name="type" class="form-control" type="text"  placeholder="Jenis Pengguna" value="<?php echo !empty($type)?$type:'';?>">
                        <?php if (!empty($typeError)): ?>
                            <span class="help-inline"><?php echo $typeError;?></span>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-offset-2 col-sm-4">
                    <button type="submit" class="btn btn-success-outline">Tambah</button>
                    <a class="btn btn-primary-outline" href="index.php">Kembali</a>
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