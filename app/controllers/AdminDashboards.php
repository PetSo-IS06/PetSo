<?php

class AdminDashboards extends Controller {
    public function __construct() {
        $this->adminDashboardModel = $this->model('AdminDashboard');
        $this->projectModel = $this->model('Project');
        $this->userModel = $this->model('User');
        $this->organizationModel = $this->model('Organization');
        $this->adminModel = $this->model('Admin');
        $this->animalProfileModel = $this->model('AnimalProfile');
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
        $annualFunds = $this->projectModel->getTotalAnnualDonations();
        $pendingRequests = $this->adminDashboardModel->getPendingRequests();
        $allUsers = $this->userModel->getAllUserAccounts();
        $allOrgs = $this->organizationModel->getAllOrganizations();
        $allAdmins = $this->adminModel->getAllAdmins();
        $allAnimals = $this->animalProfileModel->getAllAnimalProfiles();
        
        $data = [
            "pendProjects" => $pendingProjects,
            "pendRequests" => $pendingRequests,
            "allProjects" => $allProjects,
            "allUsers" => $allUsers,
            "allOrgs" => $allOrgs,
            "allAdmins" => $allAdmins,
            "allAnimals" => $allAnimals,
            "annualFunds" => $annualFunds
        ];

        $this->view('users/admin/adminDashboard', $data);
    }

    
    
    
}

