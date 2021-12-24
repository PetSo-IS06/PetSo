<?php

class OrgDashboards extends Controller {
    public function __construct() {
        $this->orgDashboardModel = $this->model('OrgDashboard');
    }

    public function index() {
        $data = [
            'title' => 'Home Page',
            'users' => ''
        ];
        $this->view('pages/index', $data);
    }

    public function aboutUs() {
        $this->view('pages/aboutUs');
    }

    
}
