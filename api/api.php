<?php
require "lib/horus/Horus.php";

$app = new Horus;
$app->autoload("classes");
$app->set([
    "Access-Control-Allow-Origin" => "*",
    "Access-Control-Allow-Credentials" => "false",
    "Access-Control-Allow-Methods" => "OPTIONS, GET, POST, PUT, DELETE",
    "Access-Control-Allow-Headers" => "Content-Type"
]);

$app->on("GET /stores", function() {
    $dbh = db::connect();
    $sql = "SELECT * from gerai";
    $query = $dbh->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $this->json($result)->end();
});

$app->on("GET /stores/:?", function($store_id) {
    $dbh = db::connect();
    $sql = "SELECT * from gerai WHERE id = :id";
    $param = [":id"=> $store_id];
    $query = $dbh->prepare($sql);
    $query->execute($param);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $this->json($result)->end();
});