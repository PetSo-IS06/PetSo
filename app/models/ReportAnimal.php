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
            (`situation`, `district`, `area`, `animal_type`, `reporter_name`, `reporter_number`,`reporter_email`,`user_id`,`image`, `heading` , `create_date`)
            VALUES (:situation, :district, :area, :animal_type, :reporter_name, :reporter_number, :reporter_email, :user_id, :image, :heading, :create_date)');

        $this->db->bind(':situation', $data['situation']);
        $this->db->bind(':district', $data['district']);
        $this->db->bind(':area', $data['area']);
        $this->db->bind(':animal_type', $data['animal']);
        $this->db->bind(':reporter_name', $data['name']);
        $this->db->bind(':reporter_number', $data['mobile']);
        $this->db->bind(':reporter_email', $data['email']);
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->bind(':image', $data['report-image']);
        $this->db->bind(':heading', $data['heading']);
        $this->db->bind(':create_date', $data['create_date']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function listAllReports()
    {
        $this->db->query('SELECT * FROM `petso`.`Animal_Report` ');

        $result = $this->db->resultSet();    // resultSet returns an array of Objects
        return $result;
    }

    public function getReport($id)
    {
        $this->db->query("SELECT * FROM `petso`.`Animal_Report`
                                WHERE `id` = $id");

        $result = $this->db->single();  
        return $result;
    }

    public function getRepoter($id){
        $this->db->query("SELECT User.us_name, User.us_profile_img, User.us_mobile FROM `petso`.`Animal_Report` 
                            INNER JOIN User ON Animal_Report.user_id=User.us_id
                                WHERE Animal_Report.id = $id");

        $result = $this->db->single();  
        return $result;
    }

    public function getLastInsertedId(){
        return $this->db->getLastInsertedId();
    }

    public function assignToOrganizations($animal_report_id){
        $animal_report = $this->getReport($animal_report_id);

        $this->db->query('SELECT O.*
        FROM Organization as O, Org_Animal as A
        WHERE O.org_id = A.org
        and O.org_district = :district
        and O.org_area = :area
        and A.animal_type = :animal and O.if_findhelp = :if_findhelp');

        $this->db->bind(':district', $animal_report->district);
        $this->db->bind(':area', $animal_report->area);
        $this->db->bind(':animal', $animal_report->animal_type);
        $this->db->bind(':if_findhelp', "yes");

        $result = $this->db->resultSet();    
        if($result==null) {
            $this->db->query('SELECT O.*
            FROM Organization as O, Org_Animal as A
            WHERE O.org_id = A.org
            and O.org_district = :district
            and A.animal_type = :animal and O.if_findhelp = :if_findhelp');

            $this->db->bind(':district', $animal_report->district);
            $this->db->bind(':animal', $animal_report->animal_type);
            $this->db->bind(':if_findhelp', "yes");

            $result = $this->db->resultSet();    
        }

        if($result!=null){
            foreach($result as $organization){
                //assign animal reports
                $this->db->query('INSERT INTO `petso`.`Organization_Animal_Report`
                (`org_id`, `animal_report_id`, `status`)
                VALUES (:org_id, :animal_report_id, :status)');
    
                $this->db->bind(':org_id', $organization->org_id);
                $this->db->bind(':animal_report_id', $animal_report->id);
                $this->db->bind(':status', "Pending");
        
                if ($this->db->execute()) {
                    //send sms
                    if(!empty($organization->org_mobile)){
                        sendSMS("An animal is in need of help. Please check your dashboard", $organization->org_mobile);
                    }

                    //send email
                    if(!empty($organization->org_email)){
                        sendMail($organization->org_email, "Animal in need", "Petso Alert");
                    }
                } 
            }
        }
    }
    
    public function approveAnimalReport($animal_report_id, $org_id)
    {
        $this->db->query("UPDATE `petso`.`Organization_Animal_Report`
                SET status='Accepted' WHERE org_id=$org_id AND animal_report_id=$animal_report_id");

        if ($this->db->execute()) {
            $this->db->query("DELETE FROM `petso`.`Organization_Animal_Report`
                WHERE status='pending' AND animal_report_id=$animal_report_id");

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }    
        } 
    }

    public function ignoreAnimalReport($animal_report_id, $org_id)
    {
        $this->db->query("UPDATE `petso`.`Organization_Animal_Report`
            SET status='Ignored' WHERE org_id=$org_id AND animal_report_id=$animal_report_id");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        } 
    }
}
