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
            <h4 class="card-title">Card title</h4>
            <h3>Gerai </h3>
            <small class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</small>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <label for="harga">harga</label>
                <input id="harga" type="text" class="rating" data-size="xs" >
                <br>
                <label for="kebersihan">Kebersihan</label>
                <input id="kebersihan" type="text" class="rating " data-size="xs" >
                <br>
                <label for="kualitiMakanan">Kualiti Makanan</label>
                <input id="kualitiMakanan" type="text" class="rating " data-size="xs" >
                <br>
            </li>

            <li class="list-group-item">
                <h1></h1>
            </li>
            <li class="list-group-item">Aduan pengguna</li>
        </ul>
        <div class="card-block">
            <a class="btn btn-primary btn-sm " >view detail</a>
        </div>
    </div>


    <div class="card">
    <div class="card-block">
        <ul class="list-unstyled">
            <li>
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