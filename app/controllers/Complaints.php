<?php

    class Complaints extends Controller {
        public function __construct() {
            $this->complaintModel = $this->model('Complaint');
        }

        public function Complaint() {

            $data= [
                'subject'=>'',
                'description'=>'',
                'subjectError'=> '',
                'descriptionError'=> '',
            ];

            

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data= [
                    'subject'=>trim(($_POST['subject'])),
                    'description'=>trim(($_POST['description'])),

                    'subjectError'=> '',
                    'descriptionError'=> '',
                    ];


                    if(empty($data['subject'])) {
                        $data['subjectError'] = 'Please enter Subject complaint';
                    }
                    if(empty($data['description'])) {
                        $data['descriptionError'] = 'Please enter description of the complaint';
                    }

                    if(empty($data['subjectError']) && empty($data['descriptionError'])){
                      
                        
                         $this->complaintModel->createComplaint($data);

                        header('location:' . URL_ROOT . '/pages/index');
                    
                    }

               
            }



            $this->view('users/user/inquries', $data);
        }
    }
    
