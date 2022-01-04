<?php

    class Users extends Controller {
        public function __construct() {
            $this->authModel = $this->model('Authentication');
            $this->userModel = $this->model('User');
            $this->organizationModel = $this->model('Organization');
        }

        public function index() {
            $this->view('pages/index');
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
                $nameValidation = "/^[a-zA-Z ]*$/";
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
                    if($this->authModel->ifEmailExists($data['email'])) {
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
                    $type = 'user';

                    // register user from model function
                    if($this->authModel->createAccount($data, $type)) {
                        $accountID = $this->authModel->getAccountID($data['email']);

                        if($accountID){
                            $this->userModel->register($data, $accountID);
                            // redirect to login page
                            header('location:' . URL_ROOT . '/authentications/login');
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
        
        public function selectAccount() {
            $data = [
                'title' => 'Select Account'
            ];
            $this->view('users/selectAccount', $data);
        }

        public function userProfile() {
            $result = $this->userModel->getUser();

            $data = [
                'username' => $result -> us_name,
                'mobile' => $result -> us_mobile,
                'address' => $result -> us_address,
                'city' => $result -> us_city,
                'district' => $result -> us_district,
            ];

            $this->view('users/userProfile', $data);
        }

        public function logout() {
            unset($_SESSION['user_id']);
            unset($_SESSION['user_email']);

            header('location:' . URL_ROOT . '/pages/index');
        }

        public function userProfileEdit() {
            $data = [
                'username' => '',
                'mobile' => '',
                'address' => '',
                'city' => '',
                'district' => '',
                'nameError' => '',
                'mobileError' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // sanitize post data
                // filter_input_array() returns false if POST is set to scalar value
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // trim() removes white space on either sides of input strings
                $data = [
                    'username' => trim($_POST['username']),
                    'mobile' => trim($_POST['mobile']),
                    'address' => trim($_POST['address']),
                    'city' => trim($_POST['city']),
                    'district' => trim($_POST['district']),
                    'nameError' => '',
                    'mobileError' => '',
                ];

                // regular expressions
                $nameValidation = "/^[a-zA-Z0-9]*$/";
                $mobileValidation = "/^[0-9]*$/";
//                $passwordValidation = "/^(.{0.7}|[^a-z]*|[^\d]*)*$/i";

                // validate characters in username
//                if(empty($data['username'])) {
//                    $data['usernameError'] = 'Please enter your name';
//                } elseif(!preg_match($nameValidation, $data['username'])) {
//                    $data['usernameError'] = 'Name should only contain letters/numbers';
//                }

                // validate mobile number (length & numbers only)
//                if(strlen(($data['mobile'])) != 10) {
//                    $data['mobileError'] = 'Number should contain 10 digits';
//                } elseif(!preg_match($mobileValidation, $data['mobile'])) {
//                    $data['mobileError'] = 'Mobile number should contain only numbers';
//                }

                // make sure errors are empty
                if(empty($data['usernameError']) && empty($data['mobileError'])) {

                    // register user from model function
                    if($this->userModel->editUserProfile($data)) {
                        // redirect to profile page
                        header('location:' . URL_ROOT . '/users/userProfile');
                    } else {
                        die('Something went wrong.');
                    }
                }
            }
            $this->view('users/userProfile', $data);
        }

    }
   