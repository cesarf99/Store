<?php

class Roles {
    private $id;
    private $rolename;
    private $userid;
    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }
}
