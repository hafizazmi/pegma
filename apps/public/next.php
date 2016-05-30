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
    <form action="">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">nama gerai</h4>
                <p class="card-text">penerangan gerai</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <label for="harga" class="control-label">Extra Small Rating</label>
                    <input id="harga" name="harga" class="rating rating-loading" value="1" data-min="0" data-max="5" data-step="1" data-size="xs">
                </li>
                <li class="list-group-item">
                    <label for="makanan" class="control-label">Extra Small Rating</label>
                    <input id="makanan" name="makanan" class="rating rating-loading" value="1" data-min="0" data-max="5" data-step="1" data-size="xs">
                </li>
                <li class="list-group-item">
                    <label for="kebersihan" class="control-label">Extra Small Rating</label>
                    <input id="kebersihan" name="kebersihan" class="rating rating-loading" value="1" data-min="0" data-max="5" data-step="1" data-size="xs">
                </li>
            </ul>
            <div class="card-block">
                <button type="submit" class="btn btn-primary btn-xs">Nilai</button>
            </div>
        </div>

        <div class="card">
            <div class="card-block">
                <label for="aduan">Aduan</label>
                <textarea class="form-control" id="aduan" name="aduan" rows="3"></textarea>
            </div>
            <div class="card-block">
                <button type="submit" class="btn btn-primary btn-xs">Hantar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
