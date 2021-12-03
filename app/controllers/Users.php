<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function register() {
        $data = [
           
        ];

    }
    public function login() {
        $this->view('users/login');
    }

    public function createUserSession($user) {
       
    }

    public function logout() {
       
    }
}