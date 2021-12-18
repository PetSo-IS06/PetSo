<?php

    class Authentications extends Controller {
        public function __construct() {
            $this->authModel = $this->model('Authentication');
            $this->userModel = $this->model('User');
            $this->organizationModel = $this->model('Organization');
            $this->adminModel = $this->model('Admin');
        }

        public function login() {
            error_reporting(E_ALL ^ E_WARNING);
            // an associative array to handle user input
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => ' ',
                'passwordError' => ' '
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // sanitize post data
                // filter_input_array() returns false if POST var is set to scalar value
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'emailError' => '',
                    'passwordError' => ''
                ];

                $passwordValidation = "/^(.{0.7}|[^a-z]*|[^\d]*)*$/i";

                // validate email
                if(empty($data['email'])) {
                    $data['emailError'] = 'Please enter your email';
                } elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['emailError'] = 'Please enter the correct format';
                } else {
                    // check if email already exists
                    if(!$this->authModel->ifEmailExists($data['email'])) {
                        $data['emailError'] = 'Email not registered';
                    }
                }

                //validate password
                if(empty($data['password'])) {
                    $data['passwordError'] = 'Please enter password';
                } elseif(strlen(($data['password'])) < 8) {
                    $data['passwordError'] = 'Password must have atleast 8 characters';
                } elseif(!preg_match($passwordValidation, $data['password'])) {
                    $data['passwordError'] = 'Password should contain atleast 1 numeric value';
                }

                // make sure errors are empty
                if(empty($data['emailError']) && empty($data['passwordError'])){
                    $loggedInAccount = $this->authModel->getAccountInfo($data['email'], $data['password']);

                    if($loggedInAccount->type == 'user') {
                        $loggedInUser = $this->userModel->login($loggedInAccount->id);

                        if($loggedInUser) {
                            $this->createUserSession($loggedInAccount, $loggedInUser);
                            // redirect to Index page
                            header('location:' . URL_ROOT . '/pages/index');
                        } else {
                            $data['passwordError'] = 'Incorrect Password';
    
                            $this->view('users/login', $data);
                        } 

                    } elseif($loggedInAccount->type == 'org') {
                        $loggedInUser = $this->organizationModel->login($loggedInAccount->id);

                        if($loggedInUser) {
                            $this->createOrgSession($loggedInAccount, $loggedInUser);
                            // redirect to Index page
                            header('location:' . URL_ROOT . '/pages/index');
                        } else {
                            $data['passwordError'] = 'Incorrect Password';
                            $this->view('users/login', $data);
                        }

                    } elseif($loggedInAccount->type == 'admin'){
                        $loggedInUser = $this->adminModel->login($loggedInAccount->id);

                        if($loggedInUser) {
                            $this->createAdminSession($loggedInAccount, $loggedInUser);
                            // redirect to Index page
                            header('location:' . URL_ROOT . '/pages/index');
                        } else {
                            $data['passwordError'] = 'Incorrect Password';
    
                            $this->view('users/login', $data);
                        }

                    }
                }
            } else {
                $data = [
                    'email' => '',
                    'password' => '',
                    'emailError' => ' ',
                    'passwordError' => ' '
                ];
            }

            $this->view('pages/login', $data);
        }

        public function createUserSession($account, $user) {
            session_start();
            $_SESSION['user_id'] = $user->us_id;
            $_SESSION['user_name'] = $user->us_name;
            $_SESSION['user_email'] = $account->email;
            $_SESSION['user_type'] = $account->type;
        }

        public function createOrgSession($account, $org) {
            session_start();
            $_SESSION['user_id'] = $org->org_id;
            $_SESSION['user_name'] = $org->org_name;
            $_SESSION['user_email'] = $account->email;
            $_SESSION['user_type'] = $account->type;
        }

        public function createAdminSession($account, $admin) {
            session_start();
            $_SESSION['user_id'] = $admin->ad_id;
            $_SESSION['user_name'] = $admin->ad_name;
            $_SESSION['user_email'] = $account->email;
            $_SESSION['user_type'] = $account->email;
        }

        public function resetPassword(){
            $data = [
                'email' => '',
                'mobile' => '',
                'emailError' => '',
                'mobileError' => ''
            ];

            $this->view('users/resetPassword', $data);
        }

        public function verifyOTP(){
            $data = [
                'email' => '',
                'mobile' => '',
                'emailError' => '',
                'mobileError' => ''
            ];

            $this->view('users/verifyOTP', $data);
        }
    }