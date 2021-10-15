<?php

    class Users extends Controller {
        public function __construct() {
            $this->userModel = $this->model('User');
        }

        public function login() {
            $data = [
                'title' => 'Login Page'
            ];
            $this->view('users/login', $data);
        }

        public function signup() {
            $data = [
                'title' => 'SignUp Page'
            ];
            $this->view('users/signup', $data);
        }
    

        public function organizationSignUp () {
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
   