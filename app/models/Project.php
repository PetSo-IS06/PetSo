<?php

    class Project {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }
       
        public function createOpportunity($data) {
            $this->db->query('INSERT INTO `petso`.`Volunteer_Opportunity` 
            (`reason`, `description`, `district`, `area`, `work_start`, `work_end`, `work_from`, `work_to`, `days`, `requirements`, `app_open`, `app_close`, `create_date`) 
            VALUES (:reason, :description, :district, :area, :workstart, :workend, :workfrom, :workto, :days, :requirements, :appopen, :appclose, :createdate)');
            
            $this->db->bind(':reason', $data['reason']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':district', $data['district']);
            $this->db->bind(':area', $data['area']);
            $this->db->bind(':workstart', $data['work-start']);
            $this->db->bind(':workend', $data['work-end']);
            $this->db->bind(':workfrom', $data['work-from']);
            $this->db->bind(':workto', $data['work-to']);
            $this->db->bind(':days', $data['days']);
            $this->db->bind(':requirements', $data['requirements']);
            $this->db->bind(':appopen', $data['app-open']);
            $this->db->bind(':appclose', $data['app-close']);
            $this->db->bind(':createdate', $data['create-date']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function saveProject($data) {
            $this->db->query('INSERT INTO `petso`.`Project` 
            (`title`, `org_id`, `cause`, `create_date`, `initiation_date`, `description`, `status`) 
            VALUES (:title, :org_id, :cause, :create_date, :initiation_date, :description, :status)');
            
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':org_id', $_SESSION['user_id']);
            $this->db->bind(':cause', $data['cause']);
            $this->db->bind(':create_date', $data['create-date']);
            $this->db->bind(':initiation_date', $data['initDate']);
            $this->db->bind(':description', $data['prjDescription']);
            $this->db->bind(':status', 'Pending');

            if($this->db->execute()) {
                return $this->db->getLastInsertedId();
            } else {
                return -1;
            }
        }

        public function getOpportunities() {
            $this->db->query('SELECT * FROM `petso`.`Volunteer_Opportunity`');

            // $this->db->bind();

            $result = $this->db->resultSet();

            return $result;
        }
    }