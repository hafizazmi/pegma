<?php
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'storeevaldb');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


if(!$conn)
{
    echo "Unable to connect database".mysqli_error($conn);die;
}
else
{
    // echo "Database connected successfully";
}
?>