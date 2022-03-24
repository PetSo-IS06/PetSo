<?php

    class Adoption {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAdoptionApplication($data) {
            $this->db->query("INSERT INTO `petso`.`Adoption` (`fullname`,`address`,`mobileNo`) VALUES (:fullname,:address, :mobileNo)");
            
         
            $this->db->bind(':fullname', $data['fullname'] );
            $this->db->bind(':address', $data['address'] );
            $this->db->bind(':mobileNo', $data['mobileNo'] );

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
    