<?php

    class Users extends Controller {
        public function __construct() {
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
                    if(!$this->userModel->findUserByEmail($data['email']) && !$this->organizationModel->checkEmailExistance($data['email']) && !$this->adminModel->findAdminByEmail($data['email'])) {
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
                        if($this->userModel->findUserByEmail($data['email'])){
                            $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                                if($loggedInUser) {
                                    $this->createUserSession($loggedInUser);
                                    // redirect to Index page
                                    header('location:' . URL_ROOT . '/pages/index');
                                } else {
                                    $data['passwordError'] = 'Incorrect Password';
            
                                    $this->view('users/login', $data);
                                }  

                        } elseif($this->organizationModel->checkEmailExistance($data['email'])) {
                            $loggedInUser = $this->organizationModel->login($data['email'], $data['password']);

                            if($loggedInUser) {
                                $this->createOrgSession($loggedInUser);
                                // redirect to Index page
                                header('location:' . URL_ROOT . '/pages/index');
                            } else {
                                $data['passwordError'] = 'Incorrect Password';
                                $this->view('users/login', $data);
                            }
                        } elseif($this->adminModel->findAdminByEmail($data['email'])){
                            $loggedInUser = $this->adminModel->adminLogin($data['email'], $data['password']);

                                if($loggedInUser) {
                                    $this->createAdminSession($loggedInUser);
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

            $this->view('users/login', $data);
        }

        public function createUserSession($user) {
            session_start();
            $_SESSION['user_id'] = $user->us_id;
            $_SESSION['user_name'] = $user->us_name;
            $_SESSION['user_email'] = $user->us_email;
            $_SESSION['user_type'] = 'user';
        }

        public function createOrgSession($org) {
            session_start();
            $_SESSION['user_id'] = $org->org_id;
            $_SESSION['user_name'] = $org->org_name;
            $_SESSION['user_email'] = $org->org_email;
            $_SESSION['user_type'] = 'organization';
        }

        public function createAdminSession($admin) {
            session_start();
            $_SESSION['user_id'] = $admin->ad_id;
            $_SESSION['user_name'] = 'ADMIN';
            $_SESSION['user_email'] = $admin->ad_email;
            $_SESSION['user_type'] = 'admin';
        }

        public function signup() {
            error_reporting(E_ALL ^ E_WARNING);
            $data = [
                'username' => '',
                'email' => '',
                'mobile' => '',
                'password' => '',
                'confirmPassword' => '',
                'agreeCondition' => 'no',
                'usernameError' => '',
                'emailError' => '',
                'mobileError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',
                'agreeConditionError' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // sanitize post data
                // filter_input_array() returns false if POST is set to scalar value
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // trim() removes white space on either sides of input strings
                $data = [
                    'username' => trim($_POST['username']),
                    'email' => trim($_POST['email']),
                    'mobile' => trim($_POST['mobile']),
                    'password' => trim($_POST['password']),
                    'confirmPassword' => trim($_POST['confirmPassword']),
                    'agreeCondition' => trim($_POST['agreeCondition']),
                    'usernameError' => '',
                    'emailError' => '',
                    'mobileError' => '',
                    'passwordError' => '',
                    'confirmPasswordError' => '',
                    'agreeConditionError' => ''
                ];

                // regular expressions
                $nameValidation = "/^[a-zA-Z]*$/";
                $mobileValidation = "/^[0-9]*$/";
                $passwordValidation = "/^(.{0.7}|[^a-z]*|[^\d]*)*$/i";

                // check if agreed to terms & conditions
                if($data['agreeCondition'] != 'agree') {
                    $data['agreeConditionError'] = 'Please tick the box';
                }

                // validate characters in username
                if(empty($data['username'])) {
                    $data['usernameError'] = 'Please enter your name';
                } elseif(!preg_match($nameValidation, $data['username'])) {
                    $data['usernameError'] = 'Name should only contain letters';
                }

                // validate email
                if(empty($data['email'])) {
                    $data['emailError'] = 'Please enter your email';
                } elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['emailError'] = 'Please enter the correct format';
                } else {
                    // check if email already exists
                    if($this->userModel->findUserByEmail($data['email'])) {
                        $data['emailError'] = 'Email is already registered';
                    }
                }

                // validate mobile number (length & numbers only)
                if(empty($data['mobile'])) {
                    $data['mobileError'] = 'Please enter your mobile number';
                } elseif(strlen(($data['mobile'])) != 10) {
                    $data['mobileError'] = 'Number should contain 10 digits';
                } elseif(!preg_match($mobileValidation, $data['mobile'])) {
                    $data['mobileError'] = 'Mobile number should contain only numbers';
                }

                // validate password (length & numeric values)
                if(empty($data['password'])) {
                    $data['passwordError'] = 'Please enter password';
                } elseif(strlen(($data['password'])) < 8) {
                    $data['passwordError'] = 'Password must have atleast 8 characters';
                } elseif(!preg_match($passwordValidation, $data['password'])) {
                    $data['passwordError'] = 'Password should contain atleast 1 numeric value';
                }

                // validate confirm password
                if(empty($data['confirmPassword'])) {
                    $data['confirmPasswordError'] = 'Please re-enter password';
                } else {
                    if($data['password'] != $data['confirmPassword']) {
                        $data['confirmPasswordError'] = 'Passwords do not match'; 
                    }
                }

                // make sure errors are empty
                if(empty($data['usernameError']) && empty($data['emailError']) 
                && empty($data['passwordError']) && empty($data['confirmPasswordError']
                && empty($data['agreeConditionError']))) {
                    // hash password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    // register user from model function
                    if($this->userModel->register($data)) {
                        // redirect to login page
                        header('location:' . URL_ROOT . '/users/login');
                    } else {
                        die('Something went wrong.');
                    }
                }
            }

            $this->view('users/signup', $data);
        }
        
        public function selectAccount() {
            $data = [
                'title' => 'Select Account'
            ];
            $this->view('users/selectAccount', $data);
        }

        public function logout() {
            unset($_SESSION['user_id']);
            unset($_SESSION['user_email']);

            header('location:' . URL_ROOT . '/pages/index');
        }

        public function notification(){
            $this->view('components/notification');
        }
    }
   