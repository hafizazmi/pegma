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
        $gerai=$mysqli->query("DELETE FROM syarikat WHERE id=$id");
        $gerai=$mysqli->query("DELETE FROM profile WHERE id=$id");
        if($gerai){
            header('location:index.php?page=gerai-makanan');
        }
    }
}
?>