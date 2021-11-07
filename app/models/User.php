<?php

    class User {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function login($id){
           $this->db->query('SELECT * FROM `petso`.`User` WHERE `account_id` = :id');
            // bind value
           $this->db->bind(':id', $id);

           $row = $this->db->single();

           if($row) {
               return $row;
           } else {
               return false;
           }
        }

        public function register($data) {

            $this->db->query(
                'INSERT INTO `petso`.`User` (`us_name`, `us_email`, `us_mobile`, `us_password`, `account_status`) 
                VALUES (:username, :email, :mobile, :password, :accountStatus)');

            // bind values
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':mobile', $data['mobile']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':accountStatus', 'active');

            // execute function
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getUsers() {
            $this->db->query("SELECT * FROM User");

            $result = $this->db->resultSet();    // resultSet returns an array of Objects
            return $result;
        }

        // public function findUserByEmail($email) {
        //     // prepared statement
        //     $this->db->query('SELECT * FROM `petso`.`User` WHERE `us_email` = :email');

        //     // email param will be binded with $email
        //     $this->db->bind(':email', $email);

        //     // check if already registered
        //     if($this->db->rowCount() > 0) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }

        public function editUserProfile ($data) {

            $this->db->query(
                'UPDATE `petso`.`User` SET `us_name` = :username , `us_mobile` = :mobile , `us_address` = :address,
                        `us_city` = :city, `us_district` = :district WHERE `us_email` = :email');

            // bind values
            $this->db->bind(':email', $_SESSION['user_email']);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':mobile', $data['mobile']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':city', $data['city']);
            $this->db->bind(':district', $data['district']);

            // execute function
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getUser() {
            $this->db->query('SELECT * FROM `petso`.`User` WHERE `us_email` = :email');
            $this->db->bind(':email', $_SESSION['user_email']);

            $result = $this->db->single();    // resultSet returns an array of Objects
            return $result;
        }
    }
