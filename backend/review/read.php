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
    $sql = "SELECT rv.*, gr.name as 'nama gerai', pg.username as 'nama pengguna'
			FROM review rv
			LEFT JOIN gerai gr ON rv.id_gerai = gr.id
			LEFT JOIN pengguna pg ON rv.id_pengguna = pg.id
			where rv.id = ?";
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
        <h1>Aduan</h1>
    </div>

    <div class="card card-block">

        <h3 class="card-title">Maklumat Aduan</h3>



        <div class="form-group row">

            <label class="col-sm-2 form-control-label">Aduan</label>
            <div class="col-sm-10 controls">
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['review'];?>
                    </label>
                </div>
            </div>

        </div>
        <div class="form-group row">
            <label class="col-sm-2 form-control-label">status</label>
            <div class="col-sm-10 controls">
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['status'];?>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 form-control-label">Nama Gerai</label>
            <div class="col-sm-10 controls">
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['nama gerai'];?>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 form-control-label">Nama Pengguna</label>
            <div class="col-sm-10 controls">
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['nama pengguna'];?>
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
