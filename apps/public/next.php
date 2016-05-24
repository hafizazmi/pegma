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

    <h3>stall</h3>
    <p>description</p>

    <h4>
        Penilaian
    </h4>

    <br>
    <form action="evaluate.php" method="post">
        <label for="harga">harga</label>
        <input id="harga" type="text" class="rating rating-disabled" data-size="xs">
        <br>
        <label for="kebersihan">Kebersihan</label>
        <input id="kebersihan" type="text" class="rating rating-disabled" data-size="xs">
        <br>
        <label for="kualitiMakanan">Kualiti Makanan</label>
        <input id="kualitiMakanan" type="text" class="rating rating-disabled" data-size="xs">
        <br>
        <a class="btn btn-primary btn-sm" type="submit">Nilai</a>
    </form>
    <hr>
    <h4>
        Aduan
    </h4>
    <form action="review.php" class="" method="post">
        <label for="review"></label>
        <textarea name="review" id="review" cols="30" rows="10"></textarea>
        <br>
        <a class="btn btn-primary btn-sm " type="submit" >Nilai</a>
    </form>

</div>

</body>
</html>