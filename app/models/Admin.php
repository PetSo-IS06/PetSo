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
    }