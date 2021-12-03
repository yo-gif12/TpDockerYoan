<?php
    class Controller {
        public function model($model) {
            require_once APPROOT . '/models/' . $model . '.php';
            return new $model();
        }

        public function site_url($link) {
            $tablink = explode('/',  $link);
            
            $controller = $tablink[1] ? $tablink[1]:'Pages';
            $function = $tablink[2]? $tablink[2]:'index'; 
            $param = $tablink[3]? $tablink[3]: null; 
            require_once APPROOT . '/controllers/' . $controller . '.php';
            $controllerInstance = new $controller();
            return $controllerInstance-> $function($param);
        }

        public function view($view, $data = []) {
            if (file_exists(APPROOT . '/views/' . $view . '.php')) {
                require_once APPROOT . '/views/' . $view . '.php';
            } else {
                die("View does not exists.");
            }
        }
    }
