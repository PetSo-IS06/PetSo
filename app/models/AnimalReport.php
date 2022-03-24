<?php

    class AnimalReport {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAdoptionApplication() {
            // $this->db->query("SELECT * FROM Fundraiser where prj_id=$id");

            // $result = $this->db->single();    // resultSet returns an array of Objects
            // return $result;
        }
    }