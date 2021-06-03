<?php

class Orders {

    private $id;
    private $itemsid;
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

}
