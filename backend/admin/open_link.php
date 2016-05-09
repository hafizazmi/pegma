<?php
if(!isset($_GET['page'])){
	$title = 'Dashboard | Pegma';
	$page_link = 'dashboard.php';
}
else if($_GET['page']=='penilaian'){
	$title = 'Penilaian | Pegma';
	$page_link = 'borangPenilaian.php';
}
else if($_GET['page']=='gerai-makanan'){
	$title = 'Gerai | Pegma';
	$page_link = 'geraiMakanan.php';
}
else if($_GET['page']=='tambah-soalan'){
	$title = 'Tambah Soalan | Pegma';
	$page_link = 'tambahSoalanPenilaian.php';
}
else if($_GET['page']=='kemaskini-soalan'){
	$title = 'Kemaskini Soalan | Pegma';
	$page_link = 'kemaskiniSoalan.php';
}
else if($_GET['page']=='tambah-gerai'){
	$title = 'tambah gerai | Pegma';
	$page_link = 'tambahGeraiMakanan.php';
}
?>