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
        $pendingRequests = $this->adminDashboardModel->getPendingRequests();
        
        $data = [
            "pendProjects" => $pendingProjects,
            "pendRequests" => $pendingRequests,
            "funds" => ''
        ];

        $this->view('users/admin/adminDashboard', $data);
    }

    
    
    
}

