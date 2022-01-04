<?php

    class Admins extends Controller {
        public function __construct() {
            $this->adminModel = $this->model('Admin');
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
    }