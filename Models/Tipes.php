<?php

class Tipes {

    private $id;
    private $type;
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

}
