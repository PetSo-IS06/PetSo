<?php

    class Users extends Controller {
        public function __construct() {
            $this->userModel = $this->model('User');
        }

        public function login() {
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
            }

            $this->view('users/login', $data);
        }

        public function signup() {
            $data = [
                'username' => '',
                'email' => '',
                'mobile' => '',
                'password' => '',
                'confirmPassword' => '',
                'usernameError' => '',
                'emailError' => '',
                'mobileError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
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
                    'usernameError' => '',
                    'emailError' => '',
                    'mobileError' => '',
                    'passwordError' => '',
                    'confirmPasswordError' => ''
                ];

                // regular expressions
                $nameValidation = "/^[a-zA-Z0-9]*$/";
                $mobileValidation = "/^[0-9]*$/";
                $passwordValidation = "/^(.{0.7}|[^a-z]*|[^\d]*)$/i";

                // validate characters in username
                if(empty($data['username'])) {
                    $data['usernameError'] = 'Please enter your name';
                } elseif(!preg_match($nameValidation, $data['username'])) {
                    $data['usernameError'] = 'Name should only contain letters/numbers';
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
                    $data['mobileError'] = 'Number should contain only 10 digits';
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
                && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {
                    // hash password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    // register user from model function
                    if($this->userModel->register($data)) {
                        // redirect to login page
                        header('location' . URL_ROOT . '/users/login');
                    } else {
                        die('Something went wrong.');
                    }
                }
            }

            $this->view('users/signup', $data);
        }
    

        public function organizationSignUp() {
            $data = [
                'title' => 'Org Sign up'
            ];
            $this->view('users/OrganizationSignUp', $data);
        }

        public function selectAccount() {
            $data = [
                'title' => 'Select Account'
            ];
            $this->view('users/selectAccount', $data);
        }
    }
   