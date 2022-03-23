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
            'fullnameError' => '',
            'addressError' => '',
            'mobileNoError' => '',
            

        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data= [
                'fullname'=>trim(($_POST['fullname'])),
                'address'=>trim(($_POST['address'])),
                'mobileNo'=>trim(($_POST['mobileNo'])),
                'requirements'=>trim(($_POST['requirements'])),
                'fullnameError' => '',
                'addressError' => '',
                'mobileNoError' => '',
            
               
    
            ];

            if(empty($data['fullname'])) {
                $data['fullnameError'] = 'Please enter your Full name';
            }
            if(empty($data['address'])) {
                $data['addressError'] = 'Please enter the Address';
            }
            if(empty($data['mobileNo'])) {
                $data['mobileNoError'] = 'Please enter the mobile Number';

            }
            if(empty($data['fullnameError']) && empty($data['addressError']) && empty($data['monileNoError'])){

                $this->adoptionModel->createAdoptionApplication($data);
              
                header('location:' . URL_ROOT . '/pages/index');
            }
        }

       

        $this->view('animalProfiles/adoptionForm',$data);

    }

}
