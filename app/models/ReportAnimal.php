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
        $this->db->query('SELECT O.*
                    FROM Organization as O, Org_Animal as A
                    WHERE O.org_id = A.org
                    and O.org_district = :district
                    and O.org_area = :area
                    and A.animal_type = :animal');

        $this->db->bind(':district', $data['district']);
        $this->db->bind(':area', $data['area']);
        $this->db->bind(':animal', $data['animal']);

        $result = $this->db->resultSet();    // resultSet returns an array of Objects
        return $result;
    }

    public function saveReport($data)
    {
        $this->db->query('INSERT INTO `petso`.`Animal_Report`
            (`situation`, `district`, `area`, `animal_type`, `reporter_name`, `reporter_number`,`reporter_email`,`user_id`,`image`)
            VALUES (:situation, :district, :area, :animal_type, :reporter_name, :reporter_number, :reporter_email, :user_id, :image)');

        $this->db->bind(':situation', $data['situation']);
        $this->db->bind(':district', $data['district']);
        $this->db->bind(':area', $data['area']);
        $this->db->bind(':animal_type', $data['animal']);
        $this->db->bind(':reporter_name', $data['name']);
        $this->db->bind(':reporter_number', $data['mobile']);
        $this->db->bind(':reporter_email', $data['email']);
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->bind(':image', $data['report-image']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
