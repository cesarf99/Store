<?php

class Product {

    private $id;
    private $price;
    private $description;
    private $typeid;
    private $cartid;
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

}
