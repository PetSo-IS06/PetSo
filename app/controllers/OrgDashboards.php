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
        $pending_reports = $this->orgDashboardModel->getMyPendingAnimalReports();
        $all_reports = $this->orgDashboardModel->getMyAllAnimalReports();

        // Animal Profiles Overview
        $all =  $this->orgDashboardModel->getMyAnimalProfiles();
        $animals_total =  $this->orgDashboardModel->getMyAnimalProfilesTotal();
        $dogs =  $this->orgDashboardModel->getMyDogsTotal();
        $cats =  $this->orgDashboardModel->getMyCatsTotal();
        $birds =  $this->orgDashboardModel->getMyBirdsTotal();
        $others =  $this->orgDashboardModel->getMyOtherAnimalsTotal();
        $adopted =  $this->orgDashboardModel->getAdoptedTotal();
        $sponsored =  $this->orgDashboardModel->getSponsoredTotal();
        $to_adopt_total =  $this->orgDashboardModel->getToAdoptTotal();
        $to_sponsor_total =  $this->orgDashboardModel->getToSponsorTotal();
        $in_shelter_total =  $animals_total - $adopted;

        $animalProfiles = [
            'all'   =>  $all,
            'animals-total'   =>  sprintf("%02d", $animals_total),
            'dogs-total'   =>  sprintf("%02d", $dogs),
            'cats-total'   =>  sprintf("%02d", $cats),
            'birds-total'   =>  sprintf("%02d", $birds),
            'others-total'   =>  sprintf("%02d", $others),
            'adopted-total'   => sprintf("%02d", $adopted),
            'sponsored-total'   =>  sprintf("%02d", $sponsored),
            'to-adopt-total'   =>  sprintf("%02d", $to_adopt_total),
            'to-sponsor-total'   =>  sprintf("%02d", $to_sponsor_total),
            'in-shelter'   =>  sprintf("%02d", $in_shelter_total)
        ];

        $data = [
            "projects" => $projects,
            "volOpp" => $volOpp,
            "funds" => $funds,
            "an-profiles" => $animalProfiles,
            "pending_reports" => $pending_reports,
            "all_reports" => $all_reports
        ];

        $this->view('users/organization/orgDashboard', $data);
    }
    
}
