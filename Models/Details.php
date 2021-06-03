<?php

class Details {

    private $id;
    private $quantity;
    private $size;
    private $color;
    private $imgpath;
    private $productid;
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

}
