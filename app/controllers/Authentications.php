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
            error_reporting(E_ALL ^ E_NOTICE);
            // an associative array to handle user input
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => ' ',
                'passwordError' => ' ',
                'attentionMessage' => 'Welcome to PetSo'
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // sanitize post data
                // filter_input_array() returns false if POST var is set to scalar value
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
               

                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'emailError' => '',
                    'passwordError' => '',
                    'attentionMessage' => 'Welcome to PetSo'
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
                    'passwordError' => ' ',
                    'attentionMessage' => 'Welcome to PetSo',
                ];
            }

            $this->view('pages/login', $data);
        }

        public function createUserSession($account, $user) {
            $_SESSION['user_id'] = $user->us_id;
            $_SESSION['user_name'] = $user->us_name;
            $_SESSION['user_email'] = $account->email;
            $_SESSION['user_type'] = $account->type;
        }

        public function createOrgSession($account, $org) {
            $_SESSION['user_id'] = $org->org_id;
            $_SESSION['user_name'] = $org->org_name;
            $_SESSION['user_email'] = $account->email;
            $_SESSION['user_type'] = $account->type;
        }

        public function createAdminSession($account, $admin) {
            $_SESSION['user_id'] = $admin->ad_id;
            $_SESSION['user_name'] = $admin->ad_name;
            $_SESSION['user_email'] = $account->email;
            $_SESSION['user_type'] = $account->type;
        }

        public function logout() {
            unset($_SESSION['user_id']);
            unset($_SESSION['user_name']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_type']);

            header('location:' . URL_ROOT . '/pages/index');
        }

        public function verifyEmailMobile(){
            $data = [
                'email' => '',
                'mobile' => '',
                'emailError' => '',
                'mobileError' => '',
                'otp' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // sanitize post data
                // filter_input_array() returns false if POST var is set to scalar value
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'email' => trim($_POST['email']),
                    'mobile' => trim($_POST['mobile']),
                    'emailError' => '',
                    'mobileError' => '',
                    'otp' => ''
                ];

                $mobileValidation = "/^[0-9]*$/";

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

                // validate mobile number (length & numbers only)
                if(empty($data['mobile'])) {
                    $data['mobileError'] = 'Please enter your mobile number';
                } elseif(strlen(($data['mobile'])) != 10) {
                    $data['mobileError'] = 'Number should contain 10 digits';
                } elseif(!preg_match($mobileValidation, $data['mobile'])) {
                    $data['mobileError'] = 'Mobile number should contain only numbers';
                }

                if(empty($data['emailError']) && empty($data['mobileError'])){
                    $DBmobile = $this->authModel->getMobile($data);
                    if($DBmobile != -1) {
                        if(strcmp($data['mobile'], $DBmobile) == 0){
                            $this->sendOTP($data['mobile']);
                            $this->view('users/verifyOTP', $data);
                        } else {
                            $data['mobileError'] = 'Email and Mobile Number do not match';
                        }
                    } else {
                        $data['mobileError'] = 'Email and Mobile Number do not match';
                    }
                }
                return 0;
            }

            $this->view('users/resetPassword', $data);
        }

        
        public function sendOTP($mobile) {
            $curl = curl_init();

            $randomNum = substr(str_shuffle("0123456789"), 0, 4);
            $_SESSION['otp'] = $randomNum;

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://send.ozonedesk.com/api/v2/send.php?user_id=104457&api_key=va5uxwwg3xaywp374&sender_id=ozoneDEMO&to='.$mobile.'&message='.$randomNum,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;

        }

        public function verifyOTP(){
            $data = [
                'email' => '',
                'mobile' => '',
                'emailError' => '',
                'mobileError' => '',
                'otp' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // sanitize post data
                // filter_input_array() returns false if POST var is set to scalar value
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $num1 = trim($_POST['num1']);
                $num2 = trim($_POST['num2']);
                $num3 = trim($_POST['num3']);
                $num4 = trim($_POST['num4']);

                $data['otp'] = strval($num1).strval($num2).strval($num3).strval($num4);

                
            }

            $this->view('users/verifyOTP', $data);
        }

    }
