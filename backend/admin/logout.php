<?php
setcookie("id",",time()-7200");
session_start();
session_destroy();
header('location:../index.php');
?>