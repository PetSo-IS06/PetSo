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
            $this->db->query('SELECT Project.*, Organization.org_name, Organization.org_district
                                FROM Project
                                JOIN Organization ON Project.org_id = Organization.org_id
                                WHERE Project.status = :status');

            $this->db->bind(':status', 'Pending');

            $result = $this->db->resultSet();

            return $result;
        }

        public function getAllFundraisers() {
            // $this->db->query('SELECT f.* FROM `petso`.`Fundraiser` AS f, `petso`.`Project` AS p WHERE p.`org_id`= :org_id AND f.`prj_id`= p.`id`;');

            // $this->db->bind(':org_id', $_SESSION['user_id']);

            // $result = $this->db->resultSet();

            // return $result;
        }
        
    }
