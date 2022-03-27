<?php

    class Complaint {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function createComplaint($data){

            $this->db->query('INSERT INTO `petso`.`Complaint` (`subject` , `description`) VALUES (:subject , :description) ');

            $this->db->bind(':subject', $data['subject'] );
            $this->db->bind(':description', $data['description'] );

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }