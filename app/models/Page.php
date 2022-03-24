<?php

class page
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function listReports()
    {
        $this->db->query('SELECT * FROM `petso`.`Animal_Report` ');

        $result = $this->db->resultSet();    // resultSet returns an array of Objects
        return $result;
    }

}
