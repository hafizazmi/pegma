<?php
require 'database.php';
$id = null;
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ( null==$id ) {
    header("Location: index.php");
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM soalan where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
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
        <h1>Soalan Penilaian</h1>
    </div>

    <div class="card card-block">

        <h3 class="card-title">Maklumat Soalan</h3>



        <div class="form-group row">

            <label class="col-sm-2 form-control-label">Soalan</label>
            <div class="col-sm-10 controls">
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['soalan'];?>
                    </label>
                </div>
            </div>

        </div>
        <div class="form-group row">
            <label class="col-sm-2 form-control-label">Mata Demerit</label>
            <div class="col-sm-10 controls">
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['mata_demerit'];?>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-10">
                <a class="btn btn-primary-outline btn-sm" href="index.php">Back</a>
            </div>
        </div>
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
