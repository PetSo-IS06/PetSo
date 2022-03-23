<?php

class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
        $this->reportModel = $this->model('Page');

    }

    public function index() {
        // $users = $this->userModel->getUsers();
        $data = [
            'title' => 'Home Page',
            'users' => ''
        ];

        if ($this->reportModel->listReports($data)) {
            $reports = $this->reportModel->listReports($data);

            $data = [
                "reports" => $reports
            ];
            $this->view('pages/index', $data);

        } else {
            $this->view('pages/index',  $data);
        }

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
