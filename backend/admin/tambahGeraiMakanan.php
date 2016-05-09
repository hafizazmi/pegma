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
					<i class="fa fa-dashboard"></i>  <a href="geraiMakanan.html">Gerai Makanan</a>
				</li>
				<li class="active">
					<i class="fa fa-desktop"></i> Tambah Gerai Makanan
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
					<h3 class="panel-title">Tambah Gerai Makanan</h3>
				</div>
				<div class="panel-body">

					<form class="signup-page" method="post" action="tambahGeraiMakanan-save.php">
						<div class="signup-header">
							<h2 align="center">Borang Pendaftaran Gerai</h2>
							<hr>
						</div>
						<h4 align="center">Maklumat Peribadi</h4>
						<hr>
						<label>Nama Pemilik
							<span class="color-red">*</span>
						</label>
						<input class="form-control margin-bottom-20" type="text" name="nama_pemilik">
						<label>NO.K.P
							<span class="color-red">*</span>
						</label>
						<input class="form-control margin-bottom-20" type="text" name="ic_pemilik">
						<label>Alamat Surat-menyurat
							<span class="color-red">*</span>
						</label>
						<input class="form-control margin-bottom-20" type="text" placeholder="Alamat" name="alamat_pemilik">
						<input class="form-control margin-bottom-20" type="text" placeholder="poskod" name="poskod_pemilik">
						<input class="form-control margin-bottom-20" type="text" placeholder="bandar" name="bandar_pemilik">
						<input class="form-control margin-bottom-20" type="text" placeholder="daerah" name="daerah_pemilik">
						<input class="form-control margin-bottom-20" type="text" placeholder="negeri" name="negeri_pemilik">


						<hr>
						<h4 align="center">Maklumat Syarikat</h4>
						<hr>
						<label>Nama Syarikat
							<span class="color-red">*</span>
						</label>
						<input class="form-control margin-bottom-20" type="text" name="nama_syarikat">
						<label>Alamat syarikat
							<span class="color-red">*</span>
						</label>
						<input class="form-control margin-bottom-20" type="text" placeholder="Alamat" name="alamat_syarikat">
						<input class="form-control margin-bottom-20" type="text" placeholder="poskod" name="poskod_sarikat">
						<input class="form-control margin-bottom-20" type="text" placeholder="bandar" name="bandar_syarikat">
						<input class="form-control margin-bottom-20" type="text" placeholder="daerah" name="daerah_syarikat">
						<input class="form-control margin-bottom-20" type="text" placeholder="negeri" name="negeri_syarikat">
						<label>No. Pendaftaran Perniagaan
							<span class="color-red">*</span>
						</label>
						<input class="form-control margin-bottom-20" type="text" name="no_syarikat">
						<label>No Lesen Pihak Berkuasa Tempatan
							<span class="color-red">*</span>
						</label>
						<input class="form-control margin-bottom-20" type="text" name="no_lesen">

						<hr>
						<h4 align="center">Maklumat Premis</h4>
						<hr>
						<label>Nama Premis
							<span class="color-red">*</span>
						</label>
						<input class="form-control margin-bottom-20" type="text" name="nama_premis">
						<label>No. Premis
							<span class="color-red">*</span>
						</label>
						<input class="form-control margin-bottom-20" type="text" name="no_premis">
						<label>Alamat Premis
							<span class="color-red">*</span>
						</label>
						<input class="form-control margin-bottom-20" type="text" placeholder="Alamat" name="alamat_premis">
						<input class="form-control margin-bottom-20" type="text" placeholder="poskod" name="poskod_premis">
						<input class="form-control margin-bottom-20" type="text" placeholder="bandar" name="bandar_premis">
						<input class="form-control margin-bottom-20" type="text" placeholder="daerah" name="daerah_premis">
						<input class="form-control margin-bottom-20" type="text" placeholder="negeri" name="negeri_premis">

						<hr>
						<div class="row">

							<div class="col-lg-12 text-center">
								<button class="btn btn-primary" type="submit">Daftar</button>
								<button class="btn btn-primary" type="reset">Reset</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</div>