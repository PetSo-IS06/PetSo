<?php

class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $users = $this->userModel->getUsers();

        $data = [
            'title' => 'Home Page',
            'users' => $users
        ];
        $this->view('pages/index', $data);
    }

    public function home() {
        $this->view('pages/home');
    }

    // public function topNavbar() {
    //     $this->view('pages/components/topNavbar');
    // }
}