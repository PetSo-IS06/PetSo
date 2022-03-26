<?php 

require APP_ROOT."/libraries/phpmailer/Exception.php";
require APP_ROOT."/libraries/phpmailer/PHPMailer.php";
require APP_ROOT."/libraries/phpmailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($to, $body, $subject) {
    $phpMailer = new PHPMailer(true);
    $phpMailer->isSMTP();                                         //Send using SMTP
    $phpMailer->Host       = 'smtp.gmail.com';                    //Set the SMTP server to send through
    $phpMailer->SMTPAuth   = true;                                //Enable SMTP authentication
    $phpMailer->Username   = 'petso1232@gmail.com';               //SMTP username
    $phpMailer->Password   = 'PetSo@1232';                        //SMTP password
    $phpMailer->SMTPSecure = "tls";                               //Enable implicit TLS encryption
    $phpMailer->Port       = 587;  
    $phpMailer->setFrom('petso1232@gmail.com');    

    try{
        $phpMailer->addAddress($to);
        $phpMailer->Subject = $subject;
        $phpMailer->Body = $body;
        $phpMailer->send();
    }catch(Exception $e){
        var_dump($e);
    }
}
?>
