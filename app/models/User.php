<?php
require APPROOT .'/libraries/Database.php';

class User extends Database{
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
       
    }

    public function login($username, $password) {
       
    }
}