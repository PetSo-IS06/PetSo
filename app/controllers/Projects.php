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
        $this->view('projects/createProject', $data);
    }

    public function createVolunteerOpportunity() {
        $data = [
            'volunteers' => '',
            'reason' => '',
            'description' => '',
            'district' => '',
            'area' => '',
            'work-start' => '',
            'work-end' => '',
            'work-from' => '',
            'work-to' => '',
            'days' => '',
            'requirements' => '',
            'app-open' => '',
            'app-close' => '',
            'create-date' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'volunteers' => '',
                'reason' => trim($_POST['reason']),
                'description' => trim($_POST['description']),
                'district' => trim($_POST['district']),
                'area' => trim($_POST['area']),
                'work-start' => trim($_POST['work-start']),
                'work-end' => trim($_POST['work-end']),
                'work-from' => trim($_POST['work-from']),
                'work-to' => trim($_POST['work-to']),
                'days' => trim($_POST['days']),
                'requirements' => trim($_POST['requirements']),
                'app-open' => trim($_POST['app-open']),
                'app-close' => trim($_POST['app-close']),
                'create-date' => date("Y-m-d")
            ];

            if($this->projectModel->createOpportunity($data)) {
                header('location:' . URL_ROOT . '/pages/index');
            } else {
                die('Something went wrong.');
            }
        }

        $this->view('users/organization/createVolunteerOpportunity', $data);
    }
}