<?php

    class Admin {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function findAdminByEmail($email) {
            // prepared statement
            $this->db->query('SELECT * FROM `petso`.`Admin` WHERE `ad_email` = :email');

            // email param will be binded with $email
            $this->db->bind(':email', $email);

            // check if already registered
            if($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function login($id){
            $this->db->query('SELECT * FROM `petso`.`Admin` WHERE `account_id` = :id');
             // bind value
            $this->db->bind(':id', $id);
 
            $row = $this->db->single();

           if($row) {
               return $row;
           } else {
               return false;
           }
         }

         public function getPendingRequests() {
            $this->db->query("SELECT * FROM organization where account_status ='pending'");
            
            $result = $this->db->resultSet();    // resultSet returns an array of Objects
            return $result;
        }

        
        public function changeStatus($status, $id) {
            $this->db->query("UPDATE organization  SET account_status='$status' where org_id=$id");
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function getOrgDetails() {
            $this->db->query("SELECT * FROM organization where org_id=1");
            $result = $this->db->resultSet();    // resultSet returns an array of Objects
            return $result;
        }

        public function getAllAdmins() {
            $this->db->query("SELECT Ad.*, A.email FROM Admin Ad, Account A WHERE Ad.account_id = A.id");
            $result = $this->db->resultSet();    // resultSet returns an array of Objects
            return $result;
        }
    }