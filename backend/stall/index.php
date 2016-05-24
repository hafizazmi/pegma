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
		<h1>Gerai</h1>
	</div>

	<div class="card card-block row">
		<h4 class="card-title">Senarai gerai</h4>
		<p>
			<a href="create.php" class="btn btn-success-outline">Tambah</a>
		</p>

		<table class="table table-striped table-sm ">
			<thead>
			<tr>
				<th>Nama Gerai</th>
				<th>Lot Gerai</th>
				<th>Nama Pemilik</th>
				<th>Tindakan</th>
			</tr>
			</thead>
			<tbody>
			<?php
			include 'database.php';
			$pdo = Database::connect();
			$sql = 'SELECT gr.id,gr.name AS \'nama gerai\', gr.description AS \'gerai desc\', gr.lot_no AS \'lot gerai\',
				pm.id AS \'ID pemilik\', pm.name AS \'nama pemilik\', pm.email AS \'email pemilik\', pm.mobile AS \'no pemilik\'
			FROM gerai gr
			JOIN pemilik pm ON gr.id_pemilik = pm.id';
			foreach ($pdo->query($sql) as $row) {
				echo '<tr>';
				echo '<td>'. $row['nama gerai'] . '</td>';
				echo '<td>'. $row['lot gerai'] . '</td>';
				echo '<td>'. $row['nama pemilik'] . '</td>';
				echo '<td width=250>';
				echo '<a class="btn btn-primary-outline btn-sm" href="read.php?id='.$row['id'].'">Lagi</a>';
				echo '&nbsp;';
				echo '<a class="btn btn-success-outline btn-sm" href="update.php?id='.$row['id'].'">Kemaskini</a>';
				echo '&nbsp;';
				echo '<a class="btn btn-danger-outline btn-sm" href="delete.php?id='.$row['id'].'">Padam</a>';
				echo '</td>';
				echo '</tr>';
			}
			Database::disconnect();
			?>
			</tbody>
		</table>
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


