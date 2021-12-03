<?php
class Register extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        // Utility\Auth::checkUnauthenticated();
        $this->view('Users/register');
    }

    public function _login() {

       
        // Utility\Auth::checkUnauthenticated();

       
    //     if (Model\UserLogin::login()) {
    //         Utility\Redirect::to(APP_URL);
    //     }
    //     Utility\Redirect::to(APP_URL . "login");
  }
  public function logout() {

   
    // Utility\Auth::checkAuthenticated();

    // if (Model\UserLogin::logout()) {
    //     Utility\Redirect::to(APP_URL . "login");
    // }
    // Utility\Redirect::to(APP_URL);
}
public function _register() {
        
   
    // Utility\Auth::checkUnauthenticated();
    
    // if (Model\UserRegister::register()) {
    //     Utility\Redirect::to(APP_URL . "login");
    // }
    // Utility\Redirect::to(APP_URL . "register");
}

}
