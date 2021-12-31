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

        public function getAllProjects() {
            // $this->db->query('SELECT * FROM `petso`.`Project` WHERE `org_id` = :org_id');

            // $this->db->bind(':org_id', $_SESSION['user_id']);

            // $result = $this->db->resultSet();

            // return $result;
        }

        public function getAllFundraisers() {
            // $this->db->query('SELECT f.* FROM `petso`.`Fundraiser` AS f, `petso`.`Project` AS p WHERE p.`org_id`= :org_id AND f.`prj_id`= p.`id`;');

            // $this->db->bind(':org_id', $_SESSION['user_id']);

            // $result = $this->db->resultSet();

            // return $result;
        }
        
    }
