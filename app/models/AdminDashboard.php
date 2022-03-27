<?php

    class AdminDashboard {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAllVolOpportunities() {
            // $this->db->query('SELECT v.* FROM `petso`.`Volunteer_Opportunity` AS v, `petso`.`Project` AS p WHERE p.`org_id`= :org_id AND v.`prj_id`= p.`id`;');

            // $this->db->bind(':org_id', $_SESSION['user_id']);

            // $result = $this->db->resultSet();

            // return $result;
        }

        public function getPendingRequests() {
            $this->db->query('SELECT o.*, a.email
                                FROM Organization AS o, Account AS a 
                                WHERE o.`account_status` = :status AND o.`account_id` = a.`id`');

            $this->db->bind(':status', 'Pending');

            $result = $this->db->resultSet();

            return $result;
        }    

        public function rejectProject($id) {
            $this->db->query('UPDATE `petso`.`Organization` SET `account_status` = :status WHERE (`account_id` = :id)');
            
            $this->db->bind(':account_status', 'Rejected');
            $this->db->bind(':account_id', $id);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function approveProject($id) {
            $this->db->query('UPDATE `petso`.`Organization` SET `account_status` = :status WHERE (`account_id` = :id)');
            
            $this->db->bind(':account_status', 'Approved');
            $this->db->bind(':account_id', $id);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
        
    }

