<?php

class Database {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "Store";
    private $conn;

    public function __construct() {
        try {
            $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->db);
            echo "Connected successfully";
        } catch (Exception $ex) {
            echo "Failed to connect";
        }
        return $this->conn;
    }

}
