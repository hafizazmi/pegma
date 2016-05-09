<?php

if(!isset($_GET['page'])){
    $title = 'Home | Travel Point';
    $open_link = 'home/home.php';
}else if($_GET['page']=='my-profile'){
    $title = 'My Profile | Travel Point';
    $open_link = 'profile/my_profile.php';
}

?>