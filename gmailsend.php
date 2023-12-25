<?php 
require "dbConnec.php";

class User{
   
    public function sendMail($email, $message, $subject){
        require "mailer/PHPMailer.php";
        require "mailer/SMTP.php";
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        //$mail->SMTPDebug = 3;

        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = 'sajjadhossan608@gmail.com';
        $mail->Password = "dfjoqgadoibjamde";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->setFrom("sajjadhossan608@gmail.com", "Rangpur");
        $mail->addAddress($email);
        $mail->addReplyTo("sajjadhossan608@gmail.com", "Rangpur");
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body =$message;
        $mail->send();
        
    }
}


?>