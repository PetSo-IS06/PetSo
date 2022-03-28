<?php

class AdminDashboards extends Controller {
    public function __construct() {
        $this->adminDashboardModel = $this->model('AdminDashboard');
        $this->projectModel = $this->model('Project');
        $this->userModel = $this->model('User');
        $this->organizationModel = $this->model('Organization');
        $this->adminModel = $this->model('Admin');
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
        $allUsers = $this->userModel->getAllUserAccounts();
        $allOrgs = $this->organizationModel->getAllOrganizations();
        $allAdmins = $this->adminModel->getAllAdmins();
        
        $data = [
            "pendProjects" => $pendingProjects,
            "pendRequests" => $pendingRequests,
            "allProjects" => $allProjects,
            "allUsers" => $allUsers,
            "allOrgs" => $allOrgs,
            "allAdmins" => $allAdmins,
            "funds" => ''
        ];

        $this->view('users/admin/adminDashboard', $data);
    }

    
    
    
}

