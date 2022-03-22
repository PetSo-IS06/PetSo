<?php

class AnimalProfiles extends Controller {
    public function __construct() {
        $this->animalProfileModel = $this->model('AnimalProfile');
        $this->organizationModel = $this->model('Organization');
    }

    public function create() {
        error_reporting(E_ALL ^ E_WARNING);
        $data = [
            'cause' => '',
            'otherCause' => '',
            'title' => '',
            'initDate' => '',
            'prjDescription' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //File Upload
            $output_dir = "uploads/projects";//Path for file upload
            $RandomNum = time();

            if(!empty($_FILES['prof-image']['name'])) {
                $file_name = str_replace(' ','-',strtolower($_FILES['prof-image']['name']));
                $ImageExt = substr($file_name, strrpos($file_name, '.'));
                $ImageExt = str_replace('.','',$ImageExt);
                $file_name = preg_replace("/\.[^.\s]{3,4}$/", "", $file_name);
                $Newfile_name = $file_name.'-'.$RandomNum.'.'.$ImageExt;
                $ret[$Newfile_name]= $output_dir.$Newfile_name;
                move_uploaded_file($_FILES["prof-image"]["tmp_name"], $output_dir."/".$Newfile_name );
                $prof_img = $output_dir."/".$Newfile_name;
            }
            
            $data = [
                'create-date' => date("Y-m-d"),
                'name' => trim($_POST['name']),
                'type' => trim($_POST['type']),
                'breed' => trim($_POST['breed']),
                'age' => trim($_POST['age']),
                'gender' => trim($_POST['gender']),
                'prof-image' => $prof_img,
                'description' => trim($_POST['description']),
                'adoption' => trim($_POST['adoption']),
                'requirements' => trim($_POST['requirements']),
                'sponsorship' => trim($_POST['sponsorship']),
                'monthlyCost' => trim($_POST['monthlyCost']),
                'nameError' => '',
                'typeError' => '',
                'ageError' => '',
                'genderError' => '',
                'monthlyCostError' => ''
            ];

            // Input Validation
            if(empty($data['name'])) {
                $data['nameError'] = 'Please provide a name';
            }
            if(empty($data['type'])) {
                $data['typeError'] = 'Please specify the type';
            }
            if(empty($data['age'])) {
                $data['ageError'] = 'Please specify the age';
            }
            if(empty($data['gender'])) {
                $data['genderError'] = 'Please specify the gender';
            }
            if($data['sponsorship'] == 'true') {
                if(empty($data['monthlyCost'])) {
                    $data['monthlyCostError'] = 'Please mention the monthly cost';
                }
            }
            //Check if animal type exists in json file
            if(empty($data['nameError']) && empty($data['typeError']) 
            && empty($data['ageError']) && empty($data['genderError']) && empty($data['monthlyCostError'])){

                if($this->animalProfileModel->createProfile($data)) {
                    header('location:' . URL_ROOT . '/users/index');
                } else {
                    die('Something went wrong.');
                }

            }
        }

        $this->view('animalProfiles/createAnimalProfile', $data);
    }
}