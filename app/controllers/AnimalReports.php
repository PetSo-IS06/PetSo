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

    public function organizationListing($data) {
        $data = [
            'list' => $this->reportModel->listOragnizations(@data),
        ];

        $this->view('animalReports/organizationListing', $data);
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
