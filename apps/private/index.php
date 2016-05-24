<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../include/head.php'); ?>
</head>

<body>

<nav class="navbar navbar-light navbar-static-top bg-faded">
    <div class="container">

        <div class=" navbar-toggleable-xs" id="exCollapsingNavbar2">
            <a class="navbar-brand" href="index.php">StoreEval</a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="card">
        <div class="card-block">
            <ul class="list-unstyled">
                <li>
                    <p></p>
                    <small></small>
                    <br>
                    <label for="harga">harga</label>
                    <input id="harga" type="text" class="rating" data-size="xs" >
                    <br>
                    <label for="kebersihan">Kebersihan</label>
                    <input id="kebersihan" type="text" class="rating " data-size="xs" >
                    <br>
                    <label for="kualitiMakanan">Kualiti Makanan</label>
                    <input id="kualitiMakanan" type="text" class="rating " data-size="xs" >
                    <br>
                    <a class="btn btn-primary btn-sm " >view detail</a>
                </li>
            </ul>
        </div>
    </div>

</div>
</body>
</html>