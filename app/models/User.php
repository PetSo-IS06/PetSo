<?php

    class User {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        // public function getUsers() {
        //     $this->db->query("SELECT * FROM users");

        //     $result = $this->db->resultSet();    // resultSet returns an array of Objects
        //     return $result;
        // }
    }