<?php
$penilaian=$con->query("SELECT * FROM penilaian");

$rownum = $penilaian->num_rows;
?>
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Borang Penilaian
			</h1>
			<ol class="breadcrumb">
				<li>
					<i class="fa fa-dashboard"></i>  <a href="report.html">Laman Utama</a>
				</li>
				<li class="active">
					<i class="fa fa-edit"></i> Borang Penilaian
				</li>
			</ol>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">


		<div class="col-lg-12">
			<a href="index.php?page=tambah-soalan">
				<button type="button" class="btn btn-sm btn-default"> <i class="fa fa-fw fa-file"></i> Tambah Soalan</button></a><br><br>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Senarai Soalan Penilaian</h3>
				</div>
				<div class="panel-body">

					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<thead width="100%">
							<tr>
								<th>No</th>
								<th>Soalan</th>
								<th>Mata Demerit</th>
								<th>Tindakan</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$i = 1;
							if($rownum==0){ ?>
								<tr>
									<td colspan="4"><center>-- Tiada Data--</center></td>
								</tr>
							<?php 	}else{
								foreach ($penilaian as $data_nilai ) {?>



									<tr>
										<td><?php echo $i++;?></td>
										<td><?php echo $data_nilai['soalan'];?></td>
										<td><?php echo $data_nilai['mata_demerit'];?></td>
										<td>

											<button type="button" onclick="updateSoalan(<?php echo $data_nilai['id'];?>)" class="btn btn-xs btn-success">Kemaskini</button>
											<button type="button" class="btn btn-xs btn-danger" onclick="deleteSoalan(<?php echo $data_nilai['id'];?>)">Padam</button>
										</td>
									</tr>	<?php				}

							}?>


							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->

	</div>

	<script>
		function deleteSoalan(id){
			$msg = confirm("Adakah anda pasti untuk hapuskan soalan penilaian ini?");
			if($msg==true){
				window.location.href="hapusSoalanPenilaian.php?id="+id;
			}else{
				return false;
			}

		}
		function updateSoalan(id){

			window.location.href="index.php?page=kemaskini-soalan&id="+id;

		}
	</script>