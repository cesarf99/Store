<?php

require ('Config\Database.php');

class User {

    private $id;
    private $name;
    private $username;
    private $password;
    private $address;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function GetAll() {
        $sql = "SELECT * FROM `user`";
//        $usuario = $this->db->query($sql);
        $result = mysqli_query($this->db, $sql);

        return $result;
    }

}

//<?php
//
//require ('Config\Db.php');
//
//class usermodel {
//    
//}
//
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $conn = connect();
//
//    $sql = "INSERT INTO user (`USERID`, `NAME`, `USERNAME`, `PASSWORD`, `ADDRESS`, `EMAIL`) VALUES (NULL, 'César Freitas', 'cesar', '123456', 'rua rua', 'cesar@email.com')";
//    $result = mysqli_query($conn, $sql);
//
//    $user_id = mysqli_insert_id($conn);
//
//    $sql1 = "INSERT INTO roles (`ROLEID`, `ROLENAME`, `USERID`) VALUES (NULL, 'Admin', '$user_id')";
//    $result1 = mysqli_query($conn, $sql1);
//
//    $q = mysqli_stmt_init($conn);
//    if ($result == 1 || $result1 == 1) {
//        echo 'Inserted with success';
//    } else {
//        echo 'failed';
//    }
//
//    $conn->close();
//} 





