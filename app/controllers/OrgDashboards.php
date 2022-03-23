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

    public function dashboard(){
        $projects = $this->orgDashboardModel->getMyProjects();
        $volOpp = $this->orgDashboardModel->getMyVolOpportunities();
        $funds = $this->orgDashboardModel->getMyFundraisers();
        $animalProfiles = $this->orgDashboardModel->getMyAnimalProfiles();

        $data = [
            "projects" => $projects,
            "volOpp" => $volOpp,
            "funds" => $funds,
            "an-profiles" => $animalProfiles
        ];

        $this->view('users/organization/orgDashboard', $data);
    }
    
}
