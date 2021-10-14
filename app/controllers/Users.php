<?php

    class Users extends Controller {
        public function __construct() {
            $this->userModel = $this->model('User');
        }

        public function login() {
            // an associative array to handle user input
            $data = [
                'title' => 'Login Page',
                'usernameError' => '',
                'passwordError' => ''
            ];
            $this->view('users/login', $data);
        }

        public function signup() {
            $data = [
                'title' => 'SignUp Page'
            ];
            $this->view('users/signup', $data);
        }
    

        public function signUpOrg() {
            $data = [
                'title' => 'Login Page'
            ];
            $this->view('users/OrganizationSignUp', $data);
        }
        public function selectAccount() {
            $data = [
                'title' => 'Login Page'
            ];
            $this->view('users/selectAccount', $data);
        }
    }
   