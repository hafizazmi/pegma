<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');
extract($_REQUEST);
include('../class/connection.class.php');
$mysqli = connect();
include('../function/trim_data.php');
include('../function/class.php');
if(isset($_SESSION['id'])){
    if($_SESSION['type']==9){
        $gerai=$mysqli->query("INSERT INTO profile(nama,nric,alamat1,poskod,bandar,daerah,negeri) VALUES ('$nama_pemilik','$ic_pemilik','$alamat_pemilik','$poskod_pemilik','$bandar_pemilik','$daerah_pemilik','$negeri_pemilik')");
        $gerai=$mysqli->query("INSERT INTO syarikat(nama,nric,alamat1,poskod,bandar,daerah,negeri) VALUES ('$nama_syarikat','$alamat_syarikat','$poskod_sarikat','$bandar_syarikat','$daerah_syarikat','$negeri_syarikat','$no_syarikat','$no_lesen')");
        if($gerai){
            header('location:index.php?page=gerai-makanan');
        }
    }
}
?>