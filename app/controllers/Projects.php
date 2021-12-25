<?php

class Projects extends Controller {
    public function __construct() {
        $this->projectModel = $this->model('Project');
        $this->organizationModel = $this->model('Organization');
    }

    public function createProject() {
        $data = [
            'cause' => '',
            'otherCause' => '',
            'title' => '',
            'initDate' => '',
            'prjDescription' => '',
            'volunteering' => '',       //Yes or No
            'volReason' => '',
            'volDescription' => '',
            'district' => '',
            'area' => '',
            'workFrom' => '',
            'workTo' => '',
            'volRequirements' => '',
            'workStart' => '',
            'workEnd' => '',
            'days' => '',
            'appOpen' => '',
            'appClose' => '',
            'addNotes' => '',
            'funding' => '',           //Yes or No
            'prjFundsFor' => '',
            'targetAmount' => '',
            'fundStart' => '',
            'fundEnd' => '',
            'bankInfo' => '',         //newAccount or savedAccount
            'accountHolder' => '',
            'bank' => '',
            'branch' => '',
            'branchCode' => '',
            'accountNo' => '',
            'saveAccount' => '',
            'selectedAccount' => '',
            'causeError' => '',
            'titleError' => '',
            'initDateError' => '',
            'prjDescriptionError' => '',
            'volReasonError' => '',
            'volDescriptionError' => '',
            'districtError' => '',
            'areaError' => '',
            'workFromError' => '',
            'workToError' => '',
            'workStartError' => '',
            'workEndError' => '',
            'daysError' => '',
            'appOpenError' => '',
            'appCloseError' => '',
            'prjFundsForError' => '',
            'targetAmountError' => '',
            'fundStartError' => '',
            'fundEndError' => '',
            'accountHolderError' => '',
            'bankError' => '',
            'branchError' => '',
            'branchCodeError' => '',
            'accountNoError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'create-date' => date("Y-m-d"),
                'cause' => trim($_POST['cause']),
                'otherCause' => trim($_POST['otherCause']),
                'title' => trim($_POST['title']),
                'initDate' => trim($_POST['initDate']),
                'prjDescription' => trim($_POST['prjDescription']),
                'volunteering' => trim($_POST['volunteering']),
                'volReason' => trim($_POST['volReason']),
                'volDescription' => trim($_POST['volDescription']),
                'district' => trim($_POST['district']),
                'area' => trim($_POST['area']),
                'workFrom' => trim($_POST['workFrom']),
                'workTo' => trim($_POST['workTo']),
                'volRequirements' => trim($_POST['volRequirements']),
                'workStart' => trim($_POST['workStart']),
                'workEnd' => trim($_POST['workEnd']),
                'days' => trim($_POST['days']),
                'appOpen' => trim($_POST['appOpen']),
                'appClose' => trim($_POST['appClose']),
                'addNotes' => trim($_POST['addNotes']),
                'funding' => trim($_POST['funding']),
                'prjFundsFor' => trim($_POST['prjFundsFor']),
                'targetAmount' => trim($_POST['targetAmount']),
                'fundStart' => trim($_POST['fundStart']),
                'fundEnd' => trim($_POST['fundEnd']),
                'bankInfo' => trim($_POST['bankInfo']),
                'accountHolder' => trim($_POST['accountHolder']),
                'bank' => trim($_POST['bank']),
                'branch' => trim($_POST['branch']),
                'branchCode' => trim($_POST['branchCode']),
                'accountNo' => trim($_POST['accountNo']),
                'saveAccount' => trim($_POST['saveAccount']),       // if selected -> True
                'selectedAccount' => trim($_POST['selectedAccount']),
                'causeError' => '',
                'titleError' => '',
                'initDateError' => '',
                'prjDescriptionError' => '',
                'volReasonError' => '',
                'volDescriptionError' => '',
                'districtError' => '',
                'areaError' => '',
                'workFromError' => '',
                'workStartError' => '',
                'daysError' => '',
                'appOpenError' => '',
                'prjFundsForError' => '',
                'targetAmountError' => '',
                'fundStartError' => '',
                'fundEndError' => '',
                'accountHolderError' => '',
                'bankError' => '',
                'branchError' => '',
                'branchCodeError' => '',
                'accountNoError' => ''
            ];

            // Input Validation

            if(empty($data['cause'])) {
                $data['causeError'] = 'Please specify the cause of the project';
            }
            if(empty($data['title'])) {
                $data['titleError'] = 'Please provide a title for the project';
            }
            if(empty($data['initDate'])) {
                $data['initDateError'] = 'Please mention when the project is to be implmented';
            }
            if(empty($data['prjDescription'])) {
                $data['prjDescriptionError'] = 'Please provide a brief description of the project';
            }

            if(strcmp($data['volunteering'], 'Yes') == 0){
                if(empty($data['volReason'])) {
                    $data['volReasonError'] = 'Please describe why the project requires volunteers';
                }
                if(empty($data['volDescription'])) {
                    $data['volDescriptionError'] = 'Please describe the job of a volunteer in this project';
                }
                if(empty($data['district'])) {
                    $data['districtError'] = 'Please specify the location of the job';
                }
                if(empty($data['area'])) {
                    $data['areaError'] = 'Please specify the location of the job';
                }
                if(empty($data['workFrom'])) {
                    $data['workFromError'] = 'Mention when the work starts';
                }
                if(empty($data['workStart'])) {
                    $data['workStartError'] = 'Mention the start date for volunteers';
                }
                if(empty($data['days'])) {
                    $data['daysError'] = 'Please specify the workdays';
                }
                if(empty($data['appOpen'])) {
                    $data['appOpenError'] = 'Specify opening date for applications';
                }
            }

            if(strcmp($data['funding'], 'Yes') == 0) {
                if(empty($data['prjFundsFor'])) {
                    $data['prjFundsForError'] = 'Please describe what the funds will be used for';
                }
                if(empty($data['targetAmount'])) {
                    $data['targetAmountError'] = 'Please specify the amount to be raised';
                } elseif((int)$data['targetAmount'] > 200000) {
                    $data['targetAmountError'] = 'Maximum amount that can be raised is LKR 200,000';
                }
                if(empty($data['fundStart'])) {
                    $data['fundStartError'] = 'Specify the date to start raising funds';
                }
                if(empty($data['fundEnd'])) {
                    $data['fundEndError'] = 'Specify the date to close the fundaraiser';
                }

                if(strcmp($data['bankInfo'], 'newAccount') == 0) {
                    if(empty($data['accountHolder'])) {
                        $data['accountHolderError'] = 'Please provide the name of the account holder';
                    }
                    if(empty($data['bank'])) {
                        $data['bankError'] = 'Please provide the bank name';
                    }
                    if(empty($data['branch'])) {
                        $data['branchError'] = 'Please provide the branch name';
                    }
                    if(empty($data['accountNo'])) {
                        $data['accountNoError'] = 'Please provide the account number';
                    }
                }    
            }

            $prjID = $this->projectModel->saveProject($data);

            if($prjID != -1) {
                if(strcmp($data['volunteering'], 'Yes') == 0) {
                    if($this->projectModel->saveVolunteeringOpportunity($data, $prjID)) {
                        echo 'Volunteering opportunity saved';
                    } else {
                        die('Could not save volunteering opportunity.');
                    }
                }
                if(strcmp($data['funding'], 'Yes') == 0) {
                    if(strcmp($data['bankInfo'], 'savedAccount') == 0) {
                        $bankID = $data['selectedAccount'];
                    } elseif(strcmp($data['bankInfo'], 'newAccount') == 0) {
                        $bankID = $this->organizationModel->saveBankAccount($data);
                    }

                    if($bankID != -1) {
                        if($this->projectModel->saveFundraiser($data, $prjID, $bankID)) {
                            echo 'Fundraising details saved';
                        } else {
                            die('Could not save fundraiser details.');
                        }
                    } else {
                        die('Could not get Bank ID');
                    }                    
                }

                header('location:' . URL_ROOT . '/pages/index');
            } else {
                die('Something went wrong.');
            }
        }

        $accounts = $this->organizationModel->getBankAccounts();
        $results = array($accounts, $data);

        $this->view('projects/createProject', $results);
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