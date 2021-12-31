<?php

    class OrgDashboard {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getMyVolOpportunities() {
            $this->db->query('SELECT v.* FROM `petso`.`Volunteer_Opportunity` AS v, `petso`.`Project` AS p WHERE p.`org_id`= :org_id AND v.`prj_id`= p.`id`;');

            $this->db->bind(':org_id', $_SESSION['user_id']);

            $result = $this->db->resultSet();

            return $result;
        }

        public function getMyProjects() {
            $this->db->query('SELECT * FROM `petso`.`Project` WHERE `org_id` = :org_id');

            $this->db->bind(':org_id', $_SESSION['user_id']);

            $result = $this->db->resultSet();

            return $result;
        }

        public function getMyFundraisers() {
            $this->db->query('SELECT f.* FROM `petso`.`Fundraiser` AS f, `petso`.`Project` AS p WHERE p.`org_id`= :org_id AND f.`prj_id`= p.`id`;');

            $this->db->bind(':org_id', $_SESSION['user_id']);

            $result = $this->db->resultSet();

            return $result;
        }
        
    }
