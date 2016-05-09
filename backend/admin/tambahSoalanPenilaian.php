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
				<li>
					<i class="fa fa-dashboard"></i>  <a href="borangPenilaian.html">Borang Penilaian</a>
				</li>
				<li class="active">
					<i class="fa fa-desktop"></i> Tambah Soalan Penilaian
				</li>
			</ol>
		</div>
	</div>
	<!-- /.row -->

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="row">


		<div class="col-lg-10">

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Tambah Soalan Penilaian</h3>
				</div>
				<div class="panel-body">

					<form class="signup-page" method="post" action="tambahSoalanPenilaian-save.php">

						<label>Soalan
							<span class="color-red">*</span>
						</label>
						<input class="form-control margin-bottom-20" type="textfield" name="soalan">
						<label>Mata demerit
							<span class="color-red">*</span>
						</label>
						<input class="form-control margin-bottom-20" type="text" name="mata_demerit">

						<hr>
						<div class="row">

							<div class="col-lg-12 text-center">
								<button class="btn btn-primary" type="submit">Tambah</button>
								<button class="btn btn-primary" type="reset">Reset</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>