<?php

class AnimalReports extends Controller {

    public function __construct() {
        $this->authModel = $this->model('Authentication');
        $this->reportModel = $this->model('ReportAnimal');
    }

    public function index() {
        $this->view('animalReports/reportAnimalForm');
    }
//    public function index() {
//        $this->view('pages/index');
//    }

    public function reportConfirmation() {
        $data = [
            'emergency' => 'no',
            'case' => '',
            'district' => '',
            'area' => '',
            'animal' => '',
            'name' => '',
            'mobile' => '',
            'email' => '',
            'nameError' => '',
            'mobileError' => '',
            'emailError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitize post data
            // filter_input_array() returns false if POST is set to scalar value
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // trim() removes white space on either sides of input strings
            $data = [
                'emergency' => trim($_POST['emergency']),
                'case' => trim($_POST['case']),
                'district' => trim($_POST['district']),
                'area' => trim($_POST['area']),
                'name' => trim($_POST['name']),
                'mobile' => trim($_POST['mobile']),
                'email' => trim($_POST['email']),
                'caseError' => '',
                'districtError' => '',
                'animalTypeError' => '',
                'mobileError' => '',
                'emailError' => '',
            ];

            // regular expressions
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $mobileValidation = "/^[0-9]*$/";
//                $passwordValidation = "/^(.{0.7}|[^a-z]*|[^\d]*)*$/i";

            // validate characters in username
//                if(empty($data['username'])) {
//                    $data['usernameError'] = 'Please enter your name';
//                } elseif(!preg_match($nameValidation, $data['username'])) {
//                    $data['usernameError'] = 'Name should only contain letters/numbers';
//                }

            // validate mobile number (length & numbers only)
//                if(strlen(($data['mobile'])) != 10) {
//                    $data['mobileError'] = 'Number should contain 10 digits';
//                } elseif(!preg_match($mobileValidation, $data['mobile'])) {
//                    $data['mobileError'] = 'Mobile number should contain only numbers';
//                }


            // make sure errors are empty
            if(empty($data['usernameError']) && empty($data['mobileError'])) {

                // register user from model function
                if($this->reportModel->listOragnizations($data)) {
                    // redirect to confirmation page
                    header('location:' . URL_ROOT . '/animalReports/reportConfirmation', $data);
                } else {
                    die('Something went wrong.');
                }
            }
        }

//        $result = $this->reportModel->listOragnizations($data);
//
//        $data = [
//            'org_name' => $result -> org_name,
//        ];
        $this->view('animalReports/reportConfirmation', $data);
    }

//    public function createAnimalReports() {
//        $data = [
//            'case' => '',
//            'district' => '',
//            'area' => '',
//            'reporterName' => '',
//            'reporterNumber' => '',
//            'reporterEmail' => ''
//        ];
//
//        if($_SERVER['REQUEST_METHOD'] == 'POST') {
//            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//
//            $data = [
//                'create-date' => date("Y-m-d"),
//                'case' => trim($_POST['case']),
//                'district' => trim($_POST['district']),
//                'area' => trim($_POST['area']),
//                'reporterName' => trim($_POST['reporterName']),
//                'reporterNumber' => trim($_POST['reporterNumber']),
//                'reporterEmail' => trim($_POST['reporterEmail'])
//            ];
//
//            // Input Validation
//
//            if(empty($data['case'])) {
//                $data['caseError'] = 'Please describe the situation';
//            }
//            if(empty($data['district'])) {
//                $data['districtError'] = 'Please provide your district';
//            }
//            if(empty($data['area'])) {
//                $data['areaError'] = 'Please provide your area';
//            }
//            if(empty($data['reporterName'])) {
//                $data['reporterNameError'] = 'Please provide Your name';
//            }
//            if(empty($data['reporterNumber'])) {
//                $data['reporterNumberError'] = 'Please provide Your name';
//            }
//            if(empty($data['reporterEmail'])) {
//                $data['reporterEmailError'] = 'Please provide Your name';
//            }
//
////            if(strcmp($data['volunteering'], 'Yes') == 0){
////                if(empty($data['volReason'])) {
////                    $data['volReasonError'] = 'Please describe why the project requires volunteers';
////                }
////                if(empty($data['volDescription'])) {
////                    $data['volDescriptionError'] = 'Please describe the job of a volunteer in this project';
////                }
////                if(empty($data['district'])) {
////                    $data['districtError'] = 'Please specify the location of the job';
////                }
////                if(empty($data['area'])) {
////                    $data['areaError'] = 'Please specify the location of the job';
////                }
////                if(empty($data['workFrom'])) {
////                    $data['workFromError'] = 'Mention when the work starts';
////                }
////                if(empty($data['workStart'])) {
////                    $data['workStartError'] = 'Mention the start date for volunteers';
////                }
////                if(empty($data['days'])) {
////                    $data['daysError'] = 'Please specify the workdays';
////                }
////                if(empty($data['appOpen'])) {
////                    $data['appOpenError'] = 'Specify opening date for applications';
////                }
////            }
//
////            if(strcmp($data['funding'], 'Yes') == 0) {
////                if(empty($data['prjFundsFor'])) {
////                    $data['prjFundsForError'] = 'Please describe what the funds will be used for';
////                }
////                if(empty($data['targetAmount'])) {
////                    $data['targetAmountError'] = 'Please specify the amount to be raised';
////                } elseif((int)$data['targetAmount'] > 200000) {
////                    $data['targetAmountError'] = 'Maximum amount that can be raised is LKR 200,000';
////                }
////                if(empty($data['fundStart'])) {
////                    $data['fundStartError'] = 'Specify the date to start raising funds';
////                }
////                if(empty($data['fundEnd'])) {
////                    $data['fundEndError'] = 'Specify the date to close the fundaraiser';
////                }
////
////                if(strcmp($data['bankInfo'], 'newAccount') == 0) {
////                    if(empty($data['accountHolder'])) {
////                        $data['accountHolderError'] = 'Please provide the name of the account holder';
////                    }
////                    if(empty($data['bank'])) {
////                        $data['bankError'] = 'Please provide the bank name';
////                    }
////                    if(empty($data['branch'])) {
////                        $data['branchError'] = 'Please provide the branch name';
////                    }
////                    if(empty($data['accountNo'])) {
////                        $data['accountNoError'] = 'Please provide the account number';
////                    }
////                }
////            }
//
//            $reportID = $this->reportModel->saveReport($data);
//
//            if($reportID != -1) {
//                if(strcmp($data['volunteering'], 'Yes') == 0) {
//                    if($this->projectModel->saveVolunteeringOpportunity($data, $prjID)) {
//                        echo 'Volunteering opportunity saved';
//                    } else {
//                        die('Could not save volunteering opportunity.');
//                    }
//                }
//                if(strcmp($data['funding'], 'Yes') == 0) {
//                    if(strcmp($data['bankInfo'], 'savedAccount') == 0) {
//                        $bankID = $data['selectedAccount'];
//                    } elseif(strcmp($data['bankInfo'], 'newAccount') == 0) {
//                        $bankID = $this->organizationModel->saveBankAccount($data);
//                    }
//
//                    if($bankID != -1) {
//                        if($this->projectModel->saveFundraiser($data, $prjID, $bankID)) {
//                            echo 'Fundraising details saved';
//                        } else {
//                            die('Could not save fundraiser details.');
//                        }
//                    } else {
//                        die('Could not get Bank ID');
//                    }
//                }
//
//                header('location:' . URL_ROOT . '/pages/index');
//            } else {
//                die('Something went wrong.');
//            }
//        }
//
//        $accounts = $this->organizationModel->getBankAccounts();
//        $results = array($accounts, $data);
//
//        $this->view('projects/createProject', $results);
//    }

}
