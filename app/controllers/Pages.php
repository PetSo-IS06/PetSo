<?php

class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        // $users = $this->userModel->getUsers();
        $data = [
            'title' => 'Home Page',
            'users' => ''
        ];
        $this->view('pages/index', $data);
    }

    public function aboutUs() {
        $this->view('pages/aboutUs');
    }

    public function services() {
        $this->view('pages/services');
    }

    public function projectTopSection(){
        $this->view('pages/projectTopSection');
    }

    
}
