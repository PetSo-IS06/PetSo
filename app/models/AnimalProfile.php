<?php

    class AnimalProfile {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function createProfile($data) {
            $this->db->query('');
            
            $this->db->bind(':title', $data['title']);

            if($this->db->execute()) {
                return $this->db->getLastInsertedId();
            } else {
                return -1;
            }
        }
    }