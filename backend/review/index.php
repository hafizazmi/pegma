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

	<div class="card card-block row">

		<table class="table table-striped table-sm ">
			<thead>
			<tr>
				<th>Aduan</th>
				<th>Gerai</th>
				<th>Tindakan</th>
			</tr>
			</thead>
			<tbody>
			<?php
			include 'database.php';
			$pdo = Database::connect();
			$sql = 'SELECT rv.*, gr.name as \'nama gerai\', pg.username as \'nama pengguna\'
					FROM review rv
					LEFT JOIN gerai gr ON rv.id_gerai = gr.id
					LEFT JOIN pengguna pg ON rv.id_pengguna = pg.id
					ORDER BY id DESC';
			foreach ($pdo->query($sql) as $row) {
				echo '<tr>';
				echo '<td>'. $row['review'] . '</td>';
				echo '<td>'. $row['nama gerai'] . '</td>';
				echo '<td width=250>';
				echo '<a class="btn btn-primary-outline btn-sm" href="read.php?id='.$row['id'].'">Lagi</a>';
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


