<?php

    class Project {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }
       
        // public function createOpportunity($data) {
        //     $this->db->query('INSERT INTO `petso`.`Volunteer_Opportunity` 
        //     (`reason`, `description`, `district`, `area`, `work_start`, `work_end`, `work_from`, `work_to`, `days`, `requirements`, `app_open`, `app_close`, `create_date`) 
        //     VALUES (:reason, :description, :district, :area, :workstart, :workend, :workfrom, :workto, :days, :requirements, :appopen, :appclose, :createdate)');
            
        //     $this->db->bind(':reason', $data['reason']);
        //     $this->db->bind(':description', $data['description']);
        //     $this->db->bind(':district', $data['district']);
        //     $this->db->bind(':area', $data['area']);
        //     $this->db->bind(':workstart', $data['work-start']);
        //     $this->db->bind(':workend', $data['work-end']);
        //     $this->db->bind(':workfrom', $data['work-from']);
        //     $this->db->bind(':workto', $data['work-to']);
        //     $this->db->bind(':days', $data['days']);
        //     $this->db->bind(':requirements', $data['requirements']);
        //     $this->db->bind(':appopen', $data['app-open']);
        //     $this->db->bind(':appclose', $data['app-close']);
        //     $this->db->bind(':createdate', $data['create-date']);

        //     if($this->db->execute()) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }

        public function saveProject($data, $vol, $fund) {
            $this->db->query('INSERT INTO `petso`.`Project` 
            (`title`, `org_id`, `cause`, `create_date`, `initiation_date`, `description`, `status`, `volunteering`, `fundraising`, `image`) 
            VALUES (:title, :org_id, :cause, :create_date, :initiation_date, :description, :status, :vol, :fund, :image)');
            
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':org_id', $_SESSION['user_id']);
            $this->db->bind(':cause', $data['cause']);
            $this->db->bind(':create_date', $data['create-date']);
            $this->db->bind(':initiation_date', $data['initDate']);
            $this->db->bind(':description', $data['prjDescription']);
            $this->db->bind(':status', 'Pending');
            $this->db->bind(':vol', $vol);
            $this->db->bind(':fund', $fund);
            $this->db->bind(':image',  $data['prj-image']);

            if($this->db->execute()) {
                return $this->db->getLastInsertedId();
            } else {
                return -1;
            }
        }

        public function saveTransaction($data) {
            $this->db->query('INSERT INTO `petso`.`Donation` (`fundraiser_id`, `amount`, `currency`, `card_holder_name`, `method`, `donor_name`, `message`, `date`) 
            VALUES (:fund_id, :amount, :currency, :card_holder, :method, :donor_name, :message, :date)');
            
            $this->db->bind(':fund_id', $data['fundraiser_id']);
            $this->db->bind(':amount', $data['amount']);
            $this->db->bind(':currency', $data['currency']);
            $this->db->bind(':card_holder', $data['card_holder_name']);
            $this->db->bind(':method', $data['amount']);
            $this->db->bind(':donor_name', $data['name']);
            $this->db->bind(':message', $data['message']);
            $this->db->bind(':date', $data['date']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function saveVolunteeringOpportunity($data, $prjID) {
            $this->db->query('INSERT INTO `petso`.`Volunteer_Opportunity` 
            (`prj_id`, `reason`, `description`, `district`, `area`, `work_start`, `work_end`, `work_from`, `work_to`, `days`, `requirements`, `app_open`, `app_close`, `add_note`, `image`) 
            VALUES (:prj_id, :reason, :description, :district, :area, :work_start, :work_end, :work_from, :work_to, :days, :requirements, :app_open, :app_close, :add_note, :image)');
            
            $this->db->bind(':prj_id', $prjID);
            $this->db->bind(':reason', $data['volReason']);
            $this->db->bind(':description', $data['volDescription']);
            $this->db->bind(':district', $data['district']);
            $this->db->bind(':area', $data['area']);
            $this->db->bind(':work_start', $data['workStart']);
            $this->db->bind(':work_end', $data['workEnd']);
            $this->db->bind(':work_from', $data['workFrom']);
            $this->db->bind(':work_to', $data['workTo']);
            $this->db->bind(':days', $data['days']);
            $this->db->bind(':requirements', $data['volRequirements']);
            $this->db->bind(':app_open', $data['appOpen']);
            $this->db->bind(':app_close', $data['appClose']);;
            $this->db->bind(':add_note', $data['addNotes']);
            $this->db->bind(':image',  $data['vol-image']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function saveFundraiser($data, $prjID, $bankID) {
            $this->db->query('INSERT INTO `petso`.`Fundraiser` 
            (`prj_id`, `funds_for`, `target_amount`, `bank_acnt_id`, `image`) 
            VALUES (:prj_id, :funds_for, :target_amount, :bank_acnt_id, :image)');
            
            $this->db->bind(':prj_id', $prjID);
            $this->db->bind(':funds_for', $data['prjFundsFor']);
            $this->db->bind(':target_amount', $data['targetAmount']);
            $this->db->bind(':bank_acnt_id', $bankID);
            $this->db->bind(':image',  $data['fund-image']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function rejectProject($id) {
            $this->db->query('UPDATE `petso`.`Project` SET `status` = :status WHERE (`id` = :id)');
            
            $this->db->bind(':status', 'Rejected');
            $this->db->bind(':id', $id);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function updateFundTransfer($id) {
            $this->db->query('UPDATE `petso`.`Fundraiser` SET `payment` = :status WHERE (`id` = :id)');
            
            $this->db->bind(':status', 'Complete');
            $this->db->bind(':id', $id);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function approveProject($id) {
            $this->db->query('UPDATE `petso`.`Project` SET `status` = :status WHERE (`id` = :id)');
            
            $this->db->bind(':status', 'Ongoing');
            $this->db->bind(':id', $id);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getAllVolOpportunities() {
            $this->db->query('SELECT * FROM `petso`.`Volunteer_Opportunity`');

            // $this->db->bind();

            $result = $this->db->resultSet();

            return $result;
        }

        public function getProjectOverviewForm($data) {
            $this->db->query('INSERT INTO welfare_project (title,initiation_date,description, coverImage)
            values (:title, :initiation_date, :description, :coverImage)');

            $this->db->bind(':title', $data['title']);
            $this->db->bind(':initiation_date',$data['initiation_date']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':coverImage', $data['coverImage']);


            if($this->db->execute()){
                return true;
            } else {
                return false;
            }

        }

        public function getprojectView($id) {
            $this->db->query("SELECT org_name, id, title, cause, create_date, initiation_date, description, status, volunteering, fundraising,image FROM Project 
           INNER JOIN Organization on Project.org_id=Organization.org_id 
             where Project.id=$id");

            $result = $this->db->single();    // resultSet returns an array of Objects
            return $result;
        }

        public function getPendingProjects() {
            $this->db->query('SELECT P.id AS proj_id, P.title AS proj_title, P.cause AS proj_cause, P.create_date AS proj_create, P.image AS proj_image, 
                                P.initiation_date AS proj_init, P.status AS proj_status, P.volunteering, P.fundraising,
                                O.org_name, 
                                F.target_amount, F.funds_for, F.funding_start, F.funding_end,
                                V.reason AS vol_reason, V.description AS vol_desc, 
                                V.area AS vol_area, V.district AS vol_district, V.work_start, V.work_end,
                                V.app_open, V.app_close, V.requirements AS vol_req
                            FROM Project P
                            LEFT JOIN Fundraiser F ON P.id = F.prj_id
                            LEFT JOIN Volunteer_Opportunity V ON P.id = V.prj_id
                            INNER JOIN Organization O ON P.org_id = O.org_id
                            WHERE P.status = :status');

            $this->db->bind(':status', 'Pending');
            $result = $this->db->resultSet();
            
            return $result;
        }

        public function getAllProjects() {
            $this->db->query('SELECT P.id AS proj_id, P.title AS proj_title, P.cause AS proj_cause, P.create_date AS proj_create, P.image AS proj_image,
                                P.initiation_date AS proj_init, P.status AS proj_status, P.volunteering, P.fundraising,
                                O.org_name, 
                                F.target_amount, F.funds_for, F.funding_start, F.funding_end,
                                V.reason AS vol_reason, V.description AS vol_desc, 
                                V.area AS vol_area, V.district AS vol_district, V.work_start, V.work_end,
                                V.app_open, V.app_close, V.requirements AS vol_req
                            FROM Project P
                            LEFT JOIN Fundraiser F ON P.id = F.prj_id
                            LEFT JOIN Volunteer_Opportunity V ON P.id = V.prj_id
                            INNER JOIN Organization O ON P.org_id = O.org_id');

            $result = $this->db->resultSet();
            
            return $result;
        }

        public function getVolunteerOpportunity($id) {
            $this->db->query("SELECT * FROM Volunteer_Opportunity where prj_id=$id");

            $result = $this->db->single();    // resultSet returns an array of Objects
            return $result;
        }

        public function getTotalAnnualDonations() {
            $this->db->query("SELECT YEAR(date) AS year, SUM(amount) AS sum FROM Donation GROUP BY year LIMIT 4");

            $result = $this->db->resultSet();    // resultSet returns an array of Objects
            return $result;
        }

        public function getFundraiser($id) {
            $this->db->query("SELECT * FROM Fundraiser where prj_id=$id");

            $result = $this->db->single();    // resultSet returns an array of Objects
            return $result;
        }

        public function getAllApprovedProjects() {
            $this->db->query("SELECT * FROM Project WHERE status!='Pending'");

            $result = $this->db->resultSet();   
            return $result;
        }

        public function getFundraiserPayments() {
            $this->db->query("SELECT F.*, O.org_name, P.title, B.account_holder, B.bank, B.account_no, B.branch
                                FROM Fundraiser F, Organization O, Project P, Bank_Account B
                                WHERE F.payment = :pay_status 
                                AND F.fundraiser_status = :fund_status
                                AND F.prj_id = P.id
                                AND B.id = F.bank_acnt_id
                                AND P.org_id = O.org_id");

            $this->db->bind(':pay_status', 'Pending' );
            $this->db->bind(':fund_status', 'Complete' );

            $result = $this->db->resultSet();   
            return $result;
        }

        public function getFundraiserDetails($id) {
            $this->db->query("SELECT F.*, O.org_name, O.org_district, P.title FROM petso.Fundraiser F, Organization O, Project P
            WHERE P.id = :id
            AND F.prj_id = P.id
            AND P.org_id = O.org_id;");

            $this->db->bind(':id', $id);

            $result = $this->db->single();   
            return $result;
        }

        public function getProjectByStatus($status) {
            $this->db->query("SELECT Project.id, title, cause, create_date, initiation_date, status, image, Organization.org_name, Organization.org_district FROM Project 
            INNER JOIN Organization ON Project.org_id=Organization.org_id WHERE Project.status='$status'");

            $result = $this->db->resultSet();   
            return $result;
        }

        public function getCountByStatus($status){
            $this->db->query("SELECT * FROM Project WHERE status='$status'");

            $result = $this->db->rowCount();   
            return $result;
        }

        public function getProjectCount() {
            $this->db->query("SELECT * FROM Project WHERE status!='Pending'");

            $result = $this->db->rowCount();   
            return $result;
        }


        public function createVolunteerApplication($data) {
            $this->db->query("INSERT INTO `petso`.`Volunteer_Application` (`applicant_name`,`dob`,`mobile`, `occupation`,`email`,`event`,`organizer`,`worktype`,`nic`, `address`, `applied_date`)
             VALUES (:applicant_name,:dob, :mobile, :occupation, :email, :event, :organizer, :worktype, :nic,  :address , :applied_date)");
            
         
            $this->db->bind(':applicant_name', $data['applicant_name'] );
            $this->db->bind(':dob', $data['dob'] );
            $this->db->bind(':occupation', $data['occupation'] );
            $this->db->bind(':address', $data['address'] );
            $this->db->bind(':mobile', $data['mobile'] );
            $this->db->bind(':email', $data['email'] );
            $this->db->bind(':event', $data['event'] );
            $this->db->bind(':organizer', $data['organizer'] );
            $this->db->bind(':worktype', $data['worktype'] );
            $this->db->bind(':nic', $data['nic'] );
            $this->db->bind(':applied_date', $data['applied_date'] );

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }   
        }

        public function getvolOpportunityID($id)
    {
        $this->db->query("SELECT *  FROM `petso`.`Volunteer_Opportunity` WHERE  id=$id");

        $result = $this->db->single();    // resultSet returns an array of Objects
        return $result;
    }

    public function searchByKeyword($keyword, $status)
    {
        $this->db->query("SELECT * FROM `petso`.`Project` 
        INNER JOIN petso.Organization ON petso.Project.org_id=petso.Organization.org_id WHERE
        (LOWER(title) LIKE LOWER('%$keyword%') OR  LOWER(Organization.org_name) LIKE LOWER('%$keyword%')) AND (Project.status='$status')");

        $result = $this->db->resultSet();   
        return $result;
    }

}
