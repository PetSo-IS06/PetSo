<?php

class AdminDashboards extends Controller {
    public function __construct() {
        $this->adminDashboardModel = $this->model('AdminDashboard');
    }

    public function index() {
        $data = [
            'title' => 'Home Page',
            'users' => ''
        ];
        $this->view('pages/index', $data);
    }

    public function dashboard(){
        $pendingProjects = $this->adminDashboardModel->getPendingProjects();
        // $volOpp = $this->orgDashboardModel->getMyVolOpportunities();
        // $funds = $this->orgDashboardModel->getMyFundraisers();

        $data = [
            "pendProjects" => $pendingProjects,
            "volOpp" => '',
            "funds" => ''
        ];

        $this->view('users/admin/adminDashboard', $data);
    }
    
}
