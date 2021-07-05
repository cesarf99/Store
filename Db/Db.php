<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Db
 *
 * @author c-a-s
 */
class Db {

    public $conn;

    private function connect() {
        $this->conn = new PDO("mysql:host=localhost;dbname=simplestore", "root", "");
    }

    private function close() {
        $this->conn = null;
    }

    public function select($query, $params = null) {

        if (!preg_match("/^SELECT/i", $query)) {
            throw new Exception('ERROR. NOT SELECT');
        }

        $this->connect();
        $result = null;

        try {
            if (!empty($params)) {
                $execute = $this->conn->prepare($query);
                $execute->execute($params);
                $result = $execute->fetchAll();
            } else {
                $execute = $this->conn->prepare($query);
                $execute->execute();
                $result = $execute->fetchAll();
            }
        } catch (PDOException $ex) {
            return false;
        }
        $this->close();
        return $result;
    }

    public function insert($query, $params = null) {
        if (!preg_match("/^INSERT/i", $query)) {
            throw new Exception('ERROR. NOT INSERT');
        }

        $this->connect();

        try {
            if (!empty($params)) {
                $execute = $this->conn->prepare($query);
                $execute->execute($params);
            } else {
                $execute = $this->conn->prepare($query);
                $execute->execute();
            }
        } catch (PDOException $ex) {
            return false;
        }

        $this->close();
    }

    public function update($query, $params = null) {
        if (!preg_match("/^UPDATE/i", $query)) {
            throw new Exception('ERROR. NOT UPDATE');
        }

        $this->connect();

        try {
            if (!empty($params)) {
                $execute = $this->conn->prepare($query);
                $execute->execute($params);
            } else {
                $execute = $this->conn->prepare($query);
                $execute->execute();
            }
        } catch (PDOException $ex) {
            return false;
        }

        $this->close();
    }

    public function delete($query, $params = null) {
        if (!preg_match("/^DELETE/i", $query)) {
            throw new Exception('ERROR. NOT DELETE');
        }

        $this->connect();

        try {
            if (!empty($params)) {
                $execute = $this->conn->prepare($query);
                $execute->execute($params);
            } else {
                $execute = $this->conn->prepare($query);
                $execute->execute();
            }
        } catch (PDOException $ex) {
            return false;
        }

        $this->close();
    }

}
