<?php

    class User {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

<<<<<<< HEAD
        // public function getUsers() {
        //     $this->db->query("SELECT * FROM users");

        //     $result = $this->db->resultSet();    // resultSet returns an array of Objects
        //     return $result;
        // }
    }
    
=======
      /*  public function getUsers() {
            $this->db->query("SELECT * FROM users");

            $result = $this->db->resultSet();    // resultSet returns an array of Objects
            return $result;
        }*/
    }
>>>>>>> 8c38fc7 (added selectAccount page)
