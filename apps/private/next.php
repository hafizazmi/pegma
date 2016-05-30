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
                <div class="card-block">
                    <h4 class="card-title">nama gerai</h4>
                    <p class="card-text">penerangan gerai</p>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Soalan</th>
                        <th>Mata demerit</th>
                        <th><label for="markah">Markah penilaian</label></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>keadaan lantai bersih lagi amat2 sgt amat bersih sungguh</td>
                        <td>21</td>
                        <td><input type="number" class="form-control form-control-sm" id="markah" placeholder="no"></td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn btn-primary btn-xs">Nilai</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
