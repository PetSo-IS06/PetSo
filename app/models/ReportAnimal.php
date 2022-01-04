<?php

class ReportAnimal
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function listOrganization($data)
    {
//        $this->db->query("SELECT * FROM `petso`.`Organization` WHERE `org_district` = :district");
        $this->db->query('SELECT * FROM `petso`.`Organization`
                                WHERE `org_district` = :district');

        $this->db->bind(':district', $data['district']);

        $result = $this->db->resultSet();    // resultSet returns an array of Objects
        return $result;
    }

//    public function saveReport($data) {
//        $this->db->query('INSERT INTO `petso`.`Reports`
//            (`title`, `org_id`, `cause`, `create_date`, `initiation_date`, `description`, `status`)
//            VALUES (:title, :org_id, :cause, :create_date, :initiation_date, :description, :status)');
//
//        $this->db->bind(':title', $data['title']);
//        $this->db->bind(':org_id', $_SESSION['user_id']);
//        $this->db->bind(':case', $data['case']);
//        $this->db->bind(':create_date', $data['create-date']);
//        $this->db->bind(':initiation_date', $data['initDate']);
//        $this->db->bind(':description', $data['prjDescription']);
//        $this->db->bind(':status', 'Pending');
//
//        if($this->db->execute()) {
//            return $this->db->getLastInsertedId();
//        } else {
//            return -1;
//        }
//    }
}
