<?php
// all classes at '../controllers/*' extends to this main controller

// load the model and the view
class Controller {
    // load model
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        // instantiate a model
        return new $model();
    }

    // load view
    public function view($view, $data = []) {
        if(file_exists('../app/views/' . $view . '.php')) {
            require_once('../app/views/' . $view . '.php');
        }
        else {
            die("View does not exist.");
        }

    }
}
