<?php

class AnimalProfile
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function createProfile($data){
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
        if ($data['adoption'] == 'true') {
            $this->db->bind(':adoption_status', 'Available');
        } else {
            $this->db->bind(':adoption_status', 'Not Available');
        }
        $this->db->bind(':requirements', $data['requirements']);
        if ($data['sponsorship'] == 'true') {
            $this->db->bind(':sponsorship_status', 'Available');
        } else {
            $this->db->bind(':sponsorship_status', 'Not Available');
        }
        $this->db->bind(':monthly_cost', $data['monthlyCost']);
        $this->db->bind(':create_date', $data['create-date']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getMyAnimalProfiles()
    {
        $this->db->query('SELECT P.*, O.org_name FROM `petso`.`Animal_Profile` AS P , `petso`.`Organization` AS O WHERE  O.org_id = P.org_id');

        $result = $this->db->resultSet();    // resultSet returns an array of Objects
        return $result;
    }

    public function getAllAnimalProfiles(){
        $this->db->query('SELECT * FROM `petso`.`Animal_Profile`');

        $result = $this->db->resultSet();    // resultSet returns an array of Objects
        return $result;
    }

    public function updateProfile($id, $data){
        $this->db->query('UPDATE `petso`.`Animal_Profile` 
        SET `name`= :name, `type` = :type, `age` = :age, `breed` = :breed, `gender` = :gender, `description` = :description, 
        `adoption_status` = :adoption, `requirements` = :requirements, `sponsorship_status` = :sponsorship, `monthly_cost` = :monthly_cost
        WHERE (`id` = :id)');

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':breed', $data['breed']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':adoption', $data['adoption']);
        $this->db->bind(':requirements', $data['requirements']);
        $this->db->bind(':sponsorship', $data['sponsorship']);
        $this->db->bind(':monthly_cost', $data['monthlyCost']);
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateProfilePic($id, $path){
        $this->db->query('UPDATE `petso`.`Animal_Profile` SET `image`= :path WHERE (`id` = :id)');

        $this->db->bind(':path', $path);
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteProfile($id){
        $this->db->query('DELETE FROM `petso`.`Animal_Profile` WHERE (`id` = :id)');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getProfile($id)
    {
        $this->db->query("SELECT P.*, O.org_name, O.org_mobile, O.org_email FROM `petso`.`Animal_Profile` AS P, `petso`.`Organization` AS O WHERE O.org_id = P.org_id AND`id` = $id");

        $result = $this->db->single();
        return $result;
    }
  
    public function getAnimalProfilebyID($id)
    {
        $this->db->query("SELECT *  FROM `petso`.`Animal_Profile`  WHERE `id` = $id");

        $result = $this->db->single();
        return $result;
    }


}
