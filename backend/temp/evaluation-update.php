<?php
include '../dbcon.php';
$user_id = '';
if(isset($_POST['id']) && !empty($_POST['id']))
{
    $user_id = $_POST['id'];
}

$sql = "SELECT * FROM soalan WHERE id = '$id' ";
$query = mysqli_query($conn, $sql);

if($query)
{
    $data = mysqli_fetch_assoc($query);
    echo json_encode($data);
}

?>