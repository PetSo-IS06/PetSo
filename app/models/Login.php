<?php

    class Login {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function ifEmailExists($email) {
            // prepared statement
            $this->db->query('SELECT * FROM `petso`.`Account` WHERE `email` = :email');

            // email param will be binded with $email
            $this->db->bind(':email', $email);

            // check if already registered
            if($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function getAccountInfo($email, $password){
            $this->db->query('SELECT * FROM `petso`.`Account` WHERE `email` = :email');
             // bind value
            $this->db->bind(':email', $email);
 
            $row = $this->db->single();
 
            $hashedPassword = $row->us_password;
 
            if(password_verify($password, $hashedPassword)) {
                return $row;
            } else {
                return false;
            }
         }
    }