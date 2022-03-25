<?php

class Conversation
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function saveConversation($data) {
        $this->db->query('INSERT INTO `petso`.`Conversation`
            (`animal_report_id`, `user_id`, `message`, `created_date`, `created_time`)
            VALUES (:animal_report_id, :user_id, :message, :created_date, :created_time)');

        $this->db->bind(':animal_report_id', $data['animal_report_id']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':message', $data['message']);
        $this->db->bind(':created_date', $data['created_date']);
        $this->db->bind(':created_time', $data['created_time']);

        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getConversations($animal_report_id)
    {
        $this->db->query("SELECT animal_report_id, message, created_date, created_time, us_name, us_profile_img, account_status FROM `petso`.`Conversation`
                                INNER JOIN User ON Conversation.user_id=User.us_id
                                WHERE `animal_report_id` = $animal_report_id");

        $result = $this->db->resultSet();  
        return $result;
    }

    public function getConversationCount($animal_report_id)
    {
        $this->db->query("SELECT * FROM `petso`.`Conversation`
                                WHERE `animal_report_id` = $animal_report_id");

        $result = $this->db->rowCount();  
        return $result;
    }
}
