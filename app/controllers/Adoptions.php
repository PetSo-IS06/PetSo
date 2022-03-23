<?php

class Adoptions extends Controller {

    public function __construct() {
        $this->adoptionModel = $this->model('Adoption');
    }

    public function adoptionApplication() {

        $data= [
            'fullname'=>'',
            'address'=>'',
            'mobileNo'=>'',
            'requirements'=>'',

        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data= [
                'fullname'=>trim(($_POST['fullname'])),
                'address'=>trim(($_POST['address'])),
                'mobileNo'=>trim(($_POST['mobileNo'])),
                'requirements'=>trim(($_POST['requirements'])),
    
            ];

            $this->adoptionModel->getAdoptionApplication($data);
        }

       

        $this->view('animalProfiles/adoptionForm',$data);

    }

}
