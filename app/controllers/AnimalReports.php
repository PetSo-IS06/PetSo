<?php

class AnimalReports extends Controller {

    public function __construct() {
        $this->authModel = $this->model('Authentication');
        $this->reportModel = $this->model('ReportAnimal');
    }

    public function index() {
        $this->view('pages/index');
    }

    public function reportAnimalForm() {
        $this->view('animalReports/reportAnimalForm');
    }

    public function listOrganizations() {
        $data = [
            'district' => '',
            'area' => '',
            'animal' => '',
            'districtError' => '',
            'areaError' => '',
            'animalError' => '',
            'organizations' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'district' => trim($_POST['district']),
                'area' => trim($_POST['area']),
                'animal' => trim($_POST['animal'])
            ];

            // Input Validation

            if(empty($data['district'])) {
                $data['districtError'] = 'Please provide your district';
            }
            if(empty($data['area'])) {
                $data['areaError'] = 'Please provide your area';
            }
            if(empty($data['animal'])) {
                $data['animalError'] = 'Please provide the animal type';
            }

            $organizations = $this->reportModel->listOrganization($data);

            $data = [
                "organizations" => $organizations
            ];

            $this->view('animalReports/listOrganizations', $data);
        }

        $this->view('animalReports/listOrganizations');
    }

//    public function reportConfirmation() {
//        $data = [
//            'emergency' => 'no',
//            'case' => '',
//            'district' => '',
//            'area' => '',
//            'animal' => '',
//            'name' => '',
//            'mobile' => '',
//            'email' => '',
//            'nameError' => '',
//            'mobileError' => '',
//            'emailError' => ''
//        ];
//
//        if($_SERVER['REQUEST_METHOD'] == 'POST') {
//            // sanitize post data
//            // filter_input_array() returns false if POST is set to scalar value
//            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//
//            // trim() removes white space on either sides of input strings
//            $data = [
//                'emergency' => trim($_POST['emergency']),
//                'case' => trim($_POST['case']),
//                'district' => trim($_POST['district']),
//                'area' => trim($_POST['area']),
//                'name' => trim($_POST['name']),
//                'mobile' => trim($_POST['mobile']),
//                'email' => trim($_POST['email']),
//                'caseError' => '',
//                'districtError' => '',
//                'animalTypeError' => '',
//                'mobileError' => '',
//                'emailError' => '',
//            ];
//
//            // regular expressions
//            $nameValidation = "/^[a-zA-Z0-9]*$/";
//            $mobileValidation = "/^[0-9]*$/";
////                $passwordValidation = "/^(.{0.7}|[^a-z]*|[^\d]*)*$/i";
//
//            // validate characters in username
////                if(empty($data['username'])) {
////                    $data['usernameError'] = 'Please enter your name';
////                } elseif(!preg_match($nameValidation, $data['username'])) {
////                    $data['usernameError'] = 'Name should only contain letters/numbers';
////                }
//
//            // validate mobile number (length & numbers only)
////                if(strlen(($data['mobile'])) != 10) {
////                    $data['mobileError'] = 'Number should contain 10 digits';
////                } elseif(!preg_match($mobileValidation, $data['mobile'])) {
////                    $data['mobileError'] = 'Mobile number should contain only numbers';
////                }
//
//
//            // make sure errors are empty
//            if(empty($data['usernameError']) && empty($data['mobileError'])) {
//
//                // register user from model function
//                if($this->reportModel->listOragnizations($data)) {
//                    // redirect to confirmation page
//                    header('location:' . URL_ROOT . '/animalReports/reportConfirmation');
//                } else {
//                    die('Something went wrong.');
//                }
//            }
//        }
//
////        $result = $this->reportModel->listOragnizations($data);
////
////        $data = [
////            'org_name' => $result -> org_name,
////        ];
//        $this->view('animalReports/reportConfirmation', $data);
//    }
}
