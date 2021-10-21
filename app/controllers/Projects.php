<?php

class Projects extends Controller {
    public function __construct() {
        $this->projectModel = $this->model('Project');
    }

    public function createProject() {
        $data = [
            'title' => 'Home Page',
            'users' => ''
        ];
        $this->view('users/ProjectOverViewForm', $data);
    }

    public function createVolunteerOpportunity() {
        $data = [
            'title' => 'Volunteer Opportunity'
        ];
        $this->view('users/organization/createVolunteerOpportunity', $data);
    }
}