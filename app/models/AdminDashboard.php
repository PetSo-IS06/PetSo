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

        public function getPendingProjects() {
            $this->db->query('SELECT P.id AS proj_id, P.title AS proj_title, P.cause AS proj_cause, P.create_date AS proj_create, 
                                P.initiation_date AS proj_init, P.status AS proj_status, P.volunteering, P.fundraising,
                                O.org_name, 
                                F.target_amount, F.funds_for, F.funding_start, F.funding_end,
                                V.reason AS vol_reason, V.description AS vol_desc, 
                                V.area AS vol_area, V.district AS vol_district, V.work_start, V.work_end,
                                V.app_open, V.app_close, V.requirements AS vol_req
                            FROM Project P
                            LEFT JOIN Fundraiser F ON P.id = F.prj_id
                            LEFT JOIN Volunteer_Opportunity V ON P.id = V.prj_id
                            INNER JOIN Organization O ON P.org_id = O.org_id
                            WHERE P.status = :status');

            $this->db->bind(':status', 'Pending');
            $result = $this->db->resultSet();
            
            return $result;
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

