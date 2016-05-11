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
    $result = new Store();
    $this->json($result->getAll())->end();
});

$app->on("GET /stores/:?", function($store_id) {
    $result = new Store();
    $this->json($result->getOne($store_id))->end();
});