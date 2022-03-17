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

            if(!empty($_FILES['prj-image']['name'])) {
                $file_name = str_replace(' ','-',strtolower($_FILES['prj-image']['name']));
                // $ImageType = $_FILES['prj-image']['type']; //"image/png", image/jpeg etc.
                $ImageExt = substr($file_name, strrpos($file_name, '.'));
                $ImageExt = str_replace('.','',$ImageExt);
                $file_name = preg_replace("/\.[^.\s]{3,4}$/", "", $file_name);
                $Newfile_name = $file_name.'-'.$RandomNum.'.'.$ImageExt;
                $ret[$Newfile_name]= $output_dir.$Newfile_name;
                move_uploaded_file($_FILES["prj-image"]["tmp_name"], $output_dir."/".$Newfile_name );
                $prj_img = $output_dir."/".$Newfile_name;
            }
            
            $data = [
                'create-date' => date("Y-m-d"),
                'cause' => trim($_POST['cause']),
                'otherCause' => trim($_POST['otherCause']),
                'title' => trim($_POST['title']),
                'initDate' => trim($_POST['initDate']),
                'prjDescription' => trim($_POST['prjDescription'])
            ];

            // Input Validation
        }

        $this->view('animalProfiles/createAnimalProfile', $data);
    }
}