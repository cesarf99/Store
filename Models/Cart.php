<?php

class Cart {

    private $id;
    private $userid;
    private $orderid;
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

}
