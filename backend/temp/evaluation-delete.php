<?php
include '../dbcon.php';
$user_id = '';
if(isset($_POST['id']) && !empty($_POST['id']))
{
    $user_id = $_POST['id'];
}

$sql = "DELETE FROM soalan WHERE ia = '$id'";
$query = mysqli_query($conn, $sql);

if($query)
{
    echo "Maklumat berjaya dipadam.";
}

?>