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
    <?php
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT  pn.id_gerai, pn.id, pn.bintang_value, pn.markah_soalan, pn.aduan,
                    gr.name AS \'nama gerai\', gr.description AS \'penerangan\',
                    pg.role
            FROM penilaian pn
            JOIN gerai gr ON gr.id = pn.id_gerai
            JOIN pengguna pg ON pg.id = pn.id_pengguna
				GROUP BY gr.id';
    foreach ($pdo->query($sql) as $row) {
        echo '<div class="card">';
        echo '<div class="card-block">';
        echo '<h4 class="card-title">Gerai Makanan</h4>';
        echo '<h3>'. $row['nama gerai'] .'</h3>';
        echo '<small class="card-text">'. $row['penerangan'] .'</small>';
        echo '</div>';
        echo '<ul class="list-group list-group-flush">';
        echo '<li class="list-group-item">';
        echo '<label for="rating" class="control-label"><h4>Rating Gerai</h4></label>';
        echo '<input id="rating" name="rating" type="text" value="'. $row['bintang_value'] .'" class="rating" data-size="xs" data-step="1" data-readonly="true">';
        echo '<br>';
        echo '<br>';
        echo '</li>';
        echo '<li class="list-group-item">';
        echo '<h4>mata gerai</h4>';
        echo '<p>'. $row['markah_soalan'] .'</p>';
        echo '</li>';
        echo ' <li class="list-group-item">';
        echo '<h4>Aduan pengguna</h4>';
        echo '<p>'. $row['aduan'] .'</p>';
        echo '</li>';
        echo '</ul>';
        echo '<div class="card-block">';
        echo '<a class="btn btn-primary btn-sm" href="next.php?id='.$row['id'].'">Lagi</a>';
        echo '</div>';
        echo '</div>';
    }
    Database::disconnect();
    ?>

</div>
</body>
</html>
