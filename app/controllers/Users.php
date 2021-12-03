<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function register() {
       
    }
    public function login() {
        $this->view('Users/login');
    }

    public function createUserSession($user) {
       
    }

    public function logout() {
       
    }
}