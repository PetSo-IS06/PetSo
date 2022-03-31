<?php

    class Admins extends Controller {
        public function __construct() {
            $this->adminModel = $this->model('Admin');
            $this->authModel = $this->model('Authentication');
        }


        public function adminViewOrgRequest() {

            $data = $this->adminModel->getpendingRequests();

            $this->view('users/admin/AdminViewOrgRequest', $data);
        }
      
        public function adminViewPendingRequest(){
            $data = $this->adminModel->getPendingRequests();
            // if (isset($_POST['approve'])) {
            //   if(  $this->userModel->changeStatus('approved')){

            //     $data = $this->userModel->getPendingRequests();
            //   }
            // }
            // if (isset($_POST['reject'])) {

            //    if( $this->userModel->changeStatus('rejected')){
            //     $data = $this->userModel->getPendingRequests();
            //    }
            // }

            $this->view('users/admin/AdminViewOrgRequest', $data);

        }
            public function orgDetails(){
            $data = $this->adminModel->getOrgDetails();

            $this->view('users/admin/orgDetails', $data[0]);
        }

        public function changeStatus($id){
            if (isset($_POST['approve'])) {
                if(  $this->adminModel->changeStatus('approved',$id)){
                    // header("Location: $root./users/adminViewPendingRequest");

                    $data = $this->adminModel->getPendingRequests();

                    $this->view('users/admin/AdminViewOrgRequest', $data);
                //   $data = $this->userModel->getPendingRequests();
                }
              }
              if (isset($_POST['reject'])) {
  
                 if( $this->admiModel->changeStatus('rejected',$id)){
                    // header("Location: $root./users/adminViewPendingRequest");
                    $data = $this->adminModel->getPendingRequests();

                    $this->view('users/admin/AdminViewOrgRequest', $data);
                //   $data = $this->userModel->getPendingRequests();
                 }
                //  $root = URL_ROOT;      

            }   
        }

        public function createAdmin() {
            error_reporting(E_ALL ^ E_WARNING);
            $data = [
                'name' => '',
                'email' => '',
                'password' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // sanitize post data
                // filter_input_array() returns false if POST is set to scalar value
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
               

                // trim() removes white space on either sides of input strings
                $data = [
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password'])
                ];

                // make sure errors are empty
                if($data) {

                    // hash password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                    $type = 'admin';

                    // register admin from model function
                    if($this->authModel->createAccount($data, $type)) {
                        $accountID = $this->authModel->getAccountID($data['email']);

                        if($this->adminModel->registerAdmin($data, $accountID)){
                            // redirect to login page
                            header('location:' . URL_ROOT . '/AdminDashboards/dashboard');
                        } else {
                            die('Could not register user');
                        }
                    } else {
                        die('Something went wrong.');
                    }
                }
            }

            $this->view('users/signup', $data);
        }
    }
    