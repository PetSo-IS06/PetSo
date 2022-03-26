<?php

    class Adoption {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function createAdoptionApplication($data) {
            $this->db->query("INSERT INTO `petso`.`Adoption` (`fullname`,`address`,`mobileNo`,  `animalprofileId`) VALUES (:fullname,:address, :mobileNo,  :animalprofileId)");
            
         
            $this->db->bind(':fullname', $data['fullname'] );
            $this->db->bind(':address', $data['address'] );
            $this->db->bind(':mobileNo', $data['mobileNo'] );
            
            $this->db->bind(':animalprofileId', $data['animalprofileId'] );

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
    