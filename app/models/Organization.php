<?php

    class Organization {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function login($id){
            $this->db->query('SELECT * FROM `petso`.`Organization` WHERE `account_id` = :id');
             // bind value
            $this->db->bind(':id', $id);
 
            $row = $this->db->single();
 
            if($row) {
                return $row;
            } else {
                return false;
            }
         }


        public function addOrganization($data, $accountID) {
            $this->db->query('INSERT INTO `petso`.`Organization` (`account_id`, `org_name`, `org_mobile`, `org_landline`, 
            `org_address1`, `org_address2`, `org_area`, `org_district`, `if_findhelp`, 
            `org_website`, `org_facebook`,  `org_insta`, `org_profile_img`, `org_doc`, `account_status`) 

            values (:accountID, :org_name, :org_mobile, :org_landline,
            :org_address1, :org_address2, :org_area, :org_district, :if_findhelp, 
            :org_website, :org_facebook, :org_insta, :org_profile_img, :org_doc, :account_status)');

            $this->db->bind(':accountID', $accountID);
            $this->db->bind(':org_name', $data['org_name']);
            $this->db->bind(':org_mobile', $data['org_mobile']);
            $this->db->bind(':org_landline', $data['org_landline']);
            // $this->db->bind(':animal_type', $data['animal_type']);
            $this->db->bind(':org_address1', $data['org_address1']);
            $this->db->bind(':org_address2', $data['org_address2']);
            $this->db->bind(':org_area', $data['org_area']);
            $this->db->bind(':org_district', $data['org_district']);
            $this->db->bind(':if_findhelp', $data['if_findhelp']);
            $this->db->bind(':org_website', $data['org_website']);
            $this->db->bind(':org_facebook', $data['org_facebook']);
            $this->db->bind(':org_insta', $data['org_insta']);
            $this->db->bind(':org_profile_img', $data['org_profile_img']);
            $this->db->bind(':org_doc', $data['org_doc']);
            $this->db->bind(':account_status', 'pending');

            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }


        public function addOrganizationAnimal($id, $animal_type){
            $this->db->query('INSERT INTO `petso`.`Org_Animal` (org, animal_type) 
            values (:org, :animal_type)');

            $this->db->bind(':org', $id);
            $this->db->bind(':animal_type', $animal_type);
            
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function getLastInsertedId(){
            return $this->db->getLastInsertedId();
        }

        // public function checkEmailExistance($email){
        //     $this->db->query("SELECT * FROM `petso`.`Organization` WHERE `org_email`=:email");
        //     $this->db->bind(':email', $email);

        //     $result = $this->db->rowCount();

        //     if($result>0){
        //         return true;
        //     }else{
        //         return false;
        //     } 
        // }

        public function getOrganization($org_id){
            $this->db->query("SELECT * FROM `petso`.`Organization` WHERE org_id=$org_id");

            $result = $this->db->resultSet(); 
            return $result;
        }

        public function getOrganizationAnimalTypes($org_id){
            $this->db->query("SELECT * FROM `petso`.`Org_Animal` WHERE `org`=$org_id");

            $result = $this->db->resultSet(); 
            return $result;
        }

        public function saveBankAccount($data){
            $this->db->query('INSERT INTO `petso`.`Bank_Account` (`org_id`, `account_holder`, `bank`, `branch`, `branch_code`, `account_no`) 
            VALUES (:org_id, :account_holder, :bank, :branch, :branch_code, :account_no)');

            $this->db->bind(':org_id', $_SESSION['user_id']);
            $this->db->bind(':account_holder', $data['accountHolder']);
            $this->db->bind(':bank', $data['bank']);
            $this->db->bind(':branch', $data['branch']);
            $this->db->bind(':branch_code', $data['branchCode']);
            $this->db->bind(':account_no', $data['accountNo']);

            if($this->db->execute()) {
                return $this->db->getLastInsertedId();
            } else {
                return -1;
            }
        }

        public function getBankAccounts(){
            $this->db->query("SELECT * FROM `petso`.`Bank_Account` WHERE `org_id` = :org_id");

            $this->db->bind(':org_id', $_SESSION['user_id']);

            $result = $this->db->resultSet(); 
            return $result;
        }

        public function dashboard($data){
            $this->db->query(' ');

            // bind value
        //    $this->db->bind();
        }
        
        public function updateOrganization($data,$id) {
            $this->db->query("UPDATE Organization SET org_name=:org_name, org_mobile=:org_mobile, org_email=:org_email,
            org_address1=:org_address1, org_website=:org_website, org_facebook=:org_facebook, org_insta=:org_insta  WHERE org_id=$id");

            $this->db->bind(':org_name', $data['org_name']);
            $this->db->bind(':org_mobile', $data['org_mobile']);
            $this->db->bind(':org_email', $data['org_email']);
            $this->db->bind(':org_website', $data['org_website']);
            $this->db->bind(':org_address1', $data['org_address1']);
            $this->db->bind(':org_facebook', $data['org_facebook']);
            $this->db->bind(':org_insta', $data['org_insta']);
    
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function updateOrgProfileImage($img_url,$org_id){
            $this->db->query("UPDATE Organization SET org_profile_img='$img_url'  WHERE org_id=$org_id");
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function getAccStatusByEmail($email){
            $this->db->query("SELECT account_status FROM `petso`.`Organization` WHERE org_id='$email'");

            $result = $this->db->single(); 
            return $result;

        }

        public function getOrganizationsCount(){
            $this->db->query("SELECT * FROM `petso`.`Organization` WHERE account_status!='pending'");

            $result = $this->db->rowCount(); 
            return $result;
        }

        public function getAllOrganizations(){
            $this->db->query("SELECT O.*, A.email FROM Organization O, Account A WHERE O.account_id = A.id");

            $result = $this->db->resultSet(); 
            return $result;
        }
    }
    