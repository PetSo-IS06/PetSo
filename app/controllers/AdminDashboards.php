<?php

class AdminDashboards extends Controller {
    public function __construct() {
        $this->adminDashboardModel = $this->model('AdminDashboard');
        $this->projectModel = $this->model('Project');
    }

    public function index() {
        $data = [
            'title' => 'Home Page',
            'users' => ''
        ];
        $this->view('pages/index', $data);
    }

    public function dashboard(){
        $pendingProjects = $this->projectModel->getPendingProjects();
        $allProjects = $this->projectModel->getAllProjects();
        $pendingRequests = $this->adminDashboardModel->getPendingRequests();
        
        $data = [
            "pendProjects" => $pendingProjects,
            "pendRequests" => $pendingRequests,
            "allProjects" => $allProjects,
            "funds" => ''
        ];

        $this->view('users/admin/adminDashboard', $data);
    }

    
    
    
}

