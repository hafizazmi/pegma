<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DB_NAME","storeevaldb");
function connect()
{
    $mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n". $mysqli->connect_error);
        exit();
    }
    return $mysqli;
}?>