<?php

class Database {

//    private $servername = "localhost";
//    private $username = "root";
//    private $password = "";
//    private $dbname = "Store";
//    private $db;

    public static function connect() {
        try {
            $db = mysqli_connect('localhost', 'root', '', 'store');
            echo "Connected successfully";
        } catch (Exception $ex) {
            echo "Failed to connect";
        }
        return $db;
    }

}
