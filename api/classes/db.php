<?php
class db {
    public static function connect() {
        /*** mysql hostname ***/
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname   = 'storeevaldb';
        try {
            return new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}