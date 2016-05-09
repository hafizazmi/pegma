<?php
$gerai=$con->query("SELECT syarikat.id as syarikatid, syarikat.nama as namasyarikat, syarikat.no_daftar_syarikat as nodaftar, syarikat.no_lesen_pihak_berkuasa as nolesen, syarikat.alamat1 as syalamat1, syarikat.alamat2 as syalamat2, syarikat.poskod as syposkod, syarikat.bandar as sybandar, syarikat.negeri as synegeri, profile.nama as pronama, profile.nric as pronric, profile.nomatrik as promatrik, profile.fakulti as profakulti , profile.notel as pronotel, profile.alamat1 as proalamat1, profile.alamat2 as proalamat2, profile.poskod as proposkod, profile.bandar as probandar, profile.daerah as prodaerah, profile.negeri as pronegeri
FROM syarikat
LEFT JOIN profile
ON profile.idsyarikat=syarikat.id
where profile.idsyarikat=syarikat.id");

$rownum = $gerai->num_rows;
?>
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Gerai Makanan
			</h1>
			<ol class="breadcrumb">
				<li>
					<i class="fa fa-dashboard"></i>  <a href="report.html">Laman Utama</a>
				</li>
				<li class="active">
					<i class="fa fa-desktop"></i> Gerai Makanan
				</li>
			</ol>
		</div>
	</div>
	<!-- /.row -->

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="row">


		<div class="col-lg-12">
			<a href="index.php?page=tambah-gerai"
			<button type="button" class="btn btn-sm btn-default"> <i class="fa fa-fw fa-file"></i> Tambah Gerai</button></a><br><br>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Senarai Gerai Makanan</h3>
				</div>
				<div class="panel-body">

					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<thead width="100%">
							<tr>
								<th>No</th>
								<th>ID Syarikat</th>
								<th>Nama Syarikat</th>
								<th>Nama Pemilik</th>
								<th>Tindakan</th>
							</tr>
							</thead>
							<tbody>

							<?php
							$i = 1;
							if($rownum==0){ ?>
								<tr>
									<td colspan="5"><center>-- Tiada Data--</center></td>
								</tr>
							<?php 	}else{
								foreach ($gerai as $data_premis ) {?>



									<tr>
										<td><?php echo $i++;?></td>
										<td><?php echo $data_premis['nodaftar'];?></td>
										<td><?php echo $data_premis['namasyarikat'];?></td>
										<td><?php echo $data_premis['pronama'];?></td>
										<td>

											<button type="button" onclick="updateGerai(<?php echo $data_premis['syarikatid'];?>)" class="btn btn-xs btn-success">Kemaskini</button>
											<button type="button" class="btn btn-xs btn-danger" onclick="deleteGerai(<?php echo $data_premis['syarikatid'];?>)">Padam</button>
										</td>
									</tr>
									<?php
								}
							}
							?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<script>
	function deleteGerai(id){
		$msg = confirm("Adakah anda pasti untuk hapuskan soalan penilaian ini?");
		if($msg==true){
			window.location.href="hapusGerai.php?id="+id;
		}else{
			return false;
		}

	}
	function updateGerai(id){

		window.location.href="index.php?page=kemaskini-soalan&id="+id;


	}
</script>