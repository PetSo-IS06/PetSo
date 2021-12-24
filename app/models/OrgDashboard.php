<?php

    class OrgDashboard {
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
        
    }
