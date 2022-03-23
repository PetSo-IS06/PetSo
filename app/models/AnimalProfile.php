<?php

    class AnimalProfile {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function createProfile($data) {
            $this->db->query('INSERT INTO `petso`.`Animal_Profile` (`org_id`, `name`, `type`, `age`, `breed`, `gender`, `description`, `image`, `adoption_status`, `requirements`, `sponsorship_status`, `monthly_cost`, `create_date`) 
            VALUES (:org_id, :name, :type, :age, :breed, :gender, :description, :image, :adoption_status, :requirements, :sponsorship_status, :monthly_cost, :create_date)');
            
            $this->db->bind(':org_id', $_SESSION['user_id']);
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':type', $data['type']);
            $this->db->bind(':age', $data['age']);
            $this->db->bind(':breed', $data['breed']);
            $this->db->bind(':gender', $data['gender']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':image', $data['prof-image']);
            if($data['adoption'] == 'true') {
                $this->db->bind(':adoption_status', 'Available');
            }else {
                $this->db->bind(':adoption_status', 'Not Available');
            }
            $this->db->bind(':requirements', $data['requirements']);
            if($data['sponsorship'] == 'true') {
                $this->db->bind(':sponsorship_status', 'Available');
            }else {
                $this->db->bind(':sponsorship_status', 'Not Available');
            }
            $this->db->bind(':monthly_cost', $data['monthlyCost']);
            $this->db->bind(':create_date', $data['create-date']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }