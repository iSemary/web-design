<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
class Mail {
   public static function setFrom($subject, $body, $address) {
     $mail = new PHPMailer\PHPMailer\PHPMailer();
     $mail->isSMTP();
     $mail->SMTPAuth = true;
     $mail->SMTPSecure = 'ssl';
     $mail->Host = 'smtp.gmail.com';
     $mail->Port = '465';
     $mail->isHTML(true);
     $mail->Username= 'GoStalkerInc@gmail.com';
     $mail->Password = 'Dbje&%@691111%';
     $mail->setFrom('no-reply@gostalker.com');
     $mail->Subject = $subject;
     $mail->Body = $body;
     $mail->AddAddress($address);
     $mail->Send();
   }
}

 ?>
