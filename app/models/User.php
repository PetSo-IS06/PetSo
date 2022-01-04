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

        public function register($data, $accountID) {

            $this->db->query(
                'INSERT INTO `petso`.`User` (`account_id`, `us_name`, `us_mobile`, `account_status`) 
                VALUES (:accountID, :username, :mobile, :accountStatus)');

            // bind values
            $this->db->bind(':accountID', $accountID);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':mobile', $data['mobile']);
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
                        `us_city` = :city, `us_district` = :district WHERE `us_id` = :id');

            // bind values
            $this->db->bind(':id', $_SESSION['user_id']);
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
            $this->db->query('SELECT * FROM `petso`.`User` WHERE `us_id` = :id');
            $this->db->bind(':id', $_SESSION['user_id']);

            
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

        public function getProjectOverviewForm($data) {
            $this->db->query('INSERT INTO welfare_project (title,initiation_date,description, coverImage)
            values (:title, :initiation_date, :description, :coverImage)');

            $this->db->bind(':title', $data['title']);
            $this->db->bind(':initiation_date',$data['initiation_date']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':coverImage', $data['coverImage']);


            if($this->db->execute()){
                return true;
            } else {
                return false;
            }

        }

        public function getprojectView() {
            $this->db->query("SELECT * FROM welfare_project where project_ID=12");

            $result = $this->db->resultSet();    // resultSet returns an array of Objects
            return $result;
        }

    
    }
