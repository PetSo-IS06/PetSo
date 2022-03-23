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

        public function getMyAnimalProfiles() {
            $this->db->query('SELECT * FROM `petso`.`Animal_Profile` WHERE `org_id` = :org_id');

            $this->db->bind(':org_id', $_SESSION['user_id']);

            $result = $this->db->resultSet();

            return $result;
        }

        public function getMyAnimalProfilesTotal() {
            $this->db->query('SELECT * FROM `petso`.`Animal_Profile` WHERE `org_id` = :org_id');

            $this->db->bind(':org_id', $_SESSION['user_id']);

            $result = $this->db->rowCount();

            return $result;
        }

        public function getMyDogsTotal() {
            $this->db->query('SELECT * FROM `petso`.`Animal_Profile` WHERE `org_id` = :org_id AND `type` = :type');

            $this->db->bind(':org_id', $_SESSION['user_id']);
            $this->db->bind(':type', 'Dog');

            $result = $this->db->rowCount();

            return $result;
        }

        public function getMyCatsTotal() {
            $this->db->query('SELECT * FROM `petso`.`Animal_Profile` WHERE `org_id` = :org_id AND `type` = :type');

            $this->db->bind(':org_id', $_SESSION['user_id']);
            $this->db->bind(':type', 'Cat');

            $result = $this->db->rowCount();

            return $result;
        }
        
        public function getMyBirdsTotal() {
            $this->db->query('SELECT * FROM `petso`.`Animal_Profile` WHERE `org_id` = :org_id AND `type` = :type');

            $this->db->bind(':org_id', $_SESSION['user_id']);
            $this->db->bind(':type', 'Bird');

            $result = $this->db->rowCount();

            return $result;
        }

        public function getMyOtherAnimalsTotal() {
            $this->db->query('SELECT * FROM `petso`.`Animal_Profile` WHERE `org_id` = :org_id AND `type` = :type');

            $this->db->bind(':org_id', $_SESSION['user_id']);
            $this->db->bind(':type', 'Other');

            $result = $this->db->rowCount();

            return $result;
        }

        public function getAdoptedTotal() {
            $this->db->query('SELECT * FROM `petso`.`Animal_Profile` WHERE `org_id` = :org_id AND `adoption_status` = :status');

            $this->db->bind(':org_id', $_SESSION['user_id']);
            $this->db->bind(':status', 'Adopted');

            $result = $this->db->rowCount();

            return $result;
        }

        public function getSponsoredTotal() {
            $this->db->query('SELECT * FROM `petso`.`Animal_Profile` WHERE `org_id` = :org_id AND `sponsorship_status` = :status');

            $this->db->bind(':org_id', $_SESSION['user_id']);
            $this->db->bind(':status', 'Sponsored');

            $result = $this->db->rowCount();

            return $result;
        }

        public function getToAdoptTotal() {
            $this->db->query('SELECT * FROM `petso`.`Animal_Profile` WHERE `org_id` = :org_id AND `adoption_status` = :status');

            $this->db->bind(':org_id', $_SESSION['user_id']);
            $this->db->bind(':status', 'Available');

            $result = $this->db->rowCount();

            return $result;
        }

        public function getToSponsorTotal() {
            $this->db->query('SELECT * FROM `petso`.`Animal_Profile` WHERE `org_id` = :org_id AND `sponsorship_status` = :status');

            $this->db->bind(':org_id', $_SESSION['user_id']);
            $this->db->bind(':status', 'Available');

            $result = $this->db->rowCount();

            return $result;
        }
    }
