<?php

class AnimalReports extends Controller
{

    public function __construct()
    {
        $this->authModel = $this->model('Authentication');
        $this->reportModel = $this->model('ReportAnimal');
        $this->conversationModel = $this->model('Conversation');
        $this->userModel = $this->model('User');
        $this->organizationModel = $this->model('Organization');
    }

    public function index()
    {
        $this->view('pages/index');
    }

    public function reportAnimal()
    {
        $this->view('animalReports/reportAnimal');
    }

    public function emergencyReportForm()
    {
        error_reporting(E_ALL ^ E_WARNING);
        $data = [
            'districtError' => '',
            'areaError' => '',
            'animalError' => ''
        ];
        $this->view('animalReports/emergencyReportForm', $data);
    }

    public function listOrganizations()
    {
        error_reporting(E_ALL ^ E_WARNING);
        error_reporting(E_ALL ^ E_NOTICE);
        $data = [
            'district' => '',
            'area' => '',
            'animal' => '',
            'districtError' => '',
            'areaError' => '',
            'animalError' => '',
            'organizations' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'district' => trim($_POST['district']),
                'area' => trim($_POST['area']),
                'animal' => trim($_POST['animal']),
                'districtError' => '',
                'areaError' => '',
                'animalError' => '',
                'organizations' => ''
            ];

            // Input Validation

            if (empty($data['district'])) {
                $data['districtError'] = 'Please provide the district';
            }
            if (empty($data['area'])) {
                $data['areaError'] = 'Please provide the area';
            }
            if (empty($data['animal'])) {
                $data['animalError'] = 'Please provide the animal type';
            }

            if (empty($data['districtError']) && empty($data['areaError']) && empty($data['animalError'])) {

                if ($this->reportModel->listOrganization($data)) {
                    $organizations = $this->reportModel->listOrganization($data);

                    $data = [
                        "organizations" => $organizations
                    ];
                    $this->view('animalReports/listOrganizations', $data);
                } else {
                    $this->view('animalReports/listOrganization');
                    die('No organization details to be displayed');
                }
            } else {
                $this->view('animalReports/emergencyReportForm', $data);
            }
        } else {
            $this->view('animalReports/emergencyReportForm', $data);
        }
    }

    public function listOrganization()
    {
        $this->view('animalReports/listOrganization');

    }


    public function nonEmergencyReportForm()
    {
        error_reporting(E_ALL ^ E_WARNING);
        $data = [
            'heading' => '',
            'situation' => '',
            'district' => '',
            'area' => '',
            'animal' => '',
            'name' => '',
            'mobile' => '',
            'email' => '',
            'headingError' => '',
            'situationError' => '',
            'districtError' => '',
            'areaError' => '',
            'animalError' => '',
            'nameError' => '',
            'mobileError' => '',
            'emailError' => '',
            'imgError' => ''
        ];

        if (isset($_SESSION["user_id"])) {
            $this->view('animalReports/nonEmergencyReportForm', $data);
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => ' ',
                'passwordError' => ' ',
                'attentionMessage' => 'Please login to continue!'
            ];

            $this->view('pages/login', $data);
//            header('location:' . URL_ROOT . '/authentications/login');
        }
    }

    public function createReport()
    {
        error_reporting(E_ALL ^ E_WARNING);
        error_reporting(E_ALL ^ E_NOTICE);
        $data = [
            'heading' => '',
            'situation' => '',
            'district' => '',
            'area' => '',
            'animal' => '',
            'name' => '',
            'mobile' => '',
            'email' => '',
            'headingError' => '',
            'situationError' => '',
            'districtError' => '',
            'areaError' => '',
            'animalError' => '',
            'nameError' => '',
            'mobileError' => '',
            'emailError' => '',
            'imgError' => '',
            'create_date' => date("Y-m-d"),
            'create_time' => date("h:i:s")
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitize post data
            // filter_input_array() returns false if POST is set to scalar value
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //File Upload
            $output_dir = "uploads/reports";//Path for file upload
            $RandomNum = time();

            if (!empty($_FILES['report-image']['name'])) {
                $file_name = str_replace(' ', '-', strtolower($_FILES['report-image']['name']));
                // $ImageType = $_FILES['report-image']['type']; //"image/png", image/jpeg etc.
                $ImageExt = substr($file_name, strrpos($file_name, '.'));
                $ImageExt = str_replace('.', '', $ImageExt);
                $file_name = preg_replace("/\.[^.\s]{3,4}$/", "", $file_name);
                $Newfile_name = $file_name . '-' . $RandomNum . '.' . $ImageExt;
                $ret[$Newfile_name] = $output_dir . $Newfile_name;
                move_uploaded_file($_FILES["report-image"]["tmp_name"], $output_dir . "/" . $Newfile_name);
                $report_img = $output_dir . "/" . $Newfile_name;
            }

            // trim() removes white space on either sides of input strings
            $data = [
                'heading' => trim($_POST['heading']),
                'situation' => trim($_POST['situation']),
                'district' => trim($_POST['district']),
                'area' => trim($_POST['area']),
                'animal' => trim($_POST['animal']),
                'name' => trim($_POST['name']),
                'mobile' => trim($_POST['mobile']),
                'email' => trim($_POST['email']),
                'report-image' => $report_img,
                'headingError' => '',
                'situationError' => '',
                'districtError' => '',
                'areaError' => '',
                'animalError' => '',
                'nameError' => '',
                'mobileError' => '',
                'emailError' => '',
                'create_date' => date("Y-m-d"),
                'create_time' => date("h:i:s")
            ];

            // regular expressions
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $mobileValidation = "/^[0-9]*$/";
//                $passwordValidation = "/^(.{0.7}|[^a-z]*|[^\d]*)*$/i";

            // validate characters in username
            if (empty($data['name'])) {
                $data['usernameError'] = 'Please enter your name';
            } elseif (!preg_match($nameValidation, $data['name'])) {
                $data['nameError'] = 'Name should only contain letters/numbers';
            }

            // validate mobile number (length & numbers only)
            if (strlen(($data['mobile'])) != 10) {
                $data['mobileError'] = 'Number should contain 10 digits';
            } elseif (!preg_match($mobileValidation, $data['mobile'])) {
                $data['mobileError'] = 'Mobile number should contain only numbers';
            }


            // make sure errors are empty
            if (empty($data['usernameError']) && empty($data['mobileError'])) {

                // register user from model function
                if ($this->reportModel->saveReport($data)) {
                    // redirect to confirmation page
                    $animal_report_id = $this->reportModel->getLastInsertedId();
                    
                    $this->reportModel->assignToOrganizations($animal_report_id);

                    header('location:' . URL_ROOT . '/pages/index');
                } else {
                    die('Something went wrong.');
                }
            } else {
                $this->view('animalReports/nonEmergencyReportForm', $data);
            }
        }
        $this->view('animalReports/nonEmergencyReportForm', $data);
    }

    public function viewAllAnimalReports()
    {
        $data = [
            "empty" => 'No reports to show here'
        ];

        if ($this->reportModel->listAllReports()) {
            $reports = $this->reportModel->listAllReports();

            $data = [
                "reports" => $reports
            ];
            $this->view('animalReports/viewAllAnimalReports', $data);

        } else {
            $this->view('animalReports/viewAllAnimalReports',  $data);
        }
        $this->view('animalReports/viewAllAnimalReports', $data);
    }

    public function viewSingleReport($id)
    {
        if(isset($_SESSION['user_id'])){
            $data = [
                'report' => $this->reportModel->getReport($id),
                'messageError' => '',
                'reporter' => $this->reportModel->getRepoter($id),
                'user' => $this->userModel->getUser(),
            ];


            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $conversationData = [
                    'message' => trim($_POST['message']),
                    'user_id' => $this->userModel->getUser()->us_id,
                    'animal_report_id' => $id,
                    'messageError' => '',
                    'created_date' => date("Y-m-d"),
                    'created_time' => date("h:i:s")
                ];

                $data = array_merge($data, $conversationData);

                if(empty($data['message'])){
                    $data['messageError'] = "Please type a message to add a conversation";
                }

                if(empty($data['messageError'])){
                    $this->conversationModel->saveConversation($data); 
                }
            }

            $data['conversations'] = $this->conversationModel->getConversations($id);
            $data['conversation_count'] = $this->conversationModel->getConversationCount($id);

            $this->view('animalReports/viewSingleReport', $data);
        }else{
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => ' ',
                'passwordError' => ' ',
                'attentionMessage' => 'Please login to continue!'
            ];

            $this->view('pages/login', $data);
        }
    }


    public function handleApprove($id){
        if(!empty($_SESSION['user_id'])){
            if($_SERVER['REQUEST_METHOD'] == 'GET') {

                $data = [
                    'title' => ''
                ];

                if($this->reportModel->approveAnimalReport($id, $_SESSION['user_id'])) {
                    $repoter = $this->reportModel->getRepoter($id);

                    try{
                        $organization_name = $this->organizationModel->getOrganization($_SESSION['user_id'])[0]->org_name;
                        sendSMS("Your animal report has been accepeted by $organization_name Animal Welfare Organization", $repoter->us_mobile);
                        header('location:' . URL_ROOT . '/OrgDashboards/dashboard');
                    }catch(Exception $e){
                        header('location:' . URL_ROOT . '/OrgDashboards/dashboard');
                    }
                } else {
                    die('Something went wrong.');
                }
            }

            $this->view('pages/index'); 
        }else{
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => ' ',
                'passwordError' => ' ',
                'attentionMessage' => 'Please login to continue!'
            ];

            $this->view('pages/login', $data);
        }
    }


    public function handleIgnore($id){
        if(!empty($_SESSION['user_id'])){
            if($_SERVER['REQUEST_METHOD'] == 'GET') {

                $data = [
                    'title' => ''
                ];

                if($this->reportModel->ignoreAnimalReport($id, $_SESSION['user_id'])) { 
                    header('location:' . URL_ROOT . '/OrgDashboards/dashboard');
                } else {
                    die('Something went wrong.');
                }
            }

            $this->view('pages/index');
        }else{
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => ' ',
                'passwordError' => ' ',
                'attentionMessage' => 'Please login to continue!'
            ];

            $this->view('pages/login', $data);
        }
    }
    
}
