<?php

    class Authentication {
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
 
            $hashedPassword = $row->password;
 
            if(password_verify($password, $hashedPassword)) {
                return $row;
            } else {
                return false;
            }
        }

        public function createAccount($data, $type){
            $this->db->query(
                'INSERT INTO `petso`.`Account` (`email`, `password`, `type`) 
                VALUES (:email, :password, :type)');

            // bind values
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':type', $type);

            // execute function
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getAccountID($email){
            $this->db->query('SELECT * FROM `petso`.`Account` WHERE `email` = :email');
             // bind value
            $this->db->bind(':email', $email);
 
            $row = $this->db->single();

            if($row){
                return $row->id;
            } else {
                return false;
            }
        }
    }