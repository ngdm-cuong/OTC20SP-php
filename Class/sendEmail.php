<?php
require("phpmailer/PHPMailerAutoload.php");
$mail = new PHPMailer;


$mail->isSMTP();

$mail->Host = "smtp.gmail.com";
$mail->Port= 587;
$mail->SMTPSecure= "tls";
$mail->SMTPAuth=true;
$mail->Username = "808.markley@gmail.com";
$mail->Password="Stitch!01";

//compose email
$mail->setFrom("nguyencu@otc.edu", "Cuong Nguyen");
$mail->addAddress("ngdm.cuong@gmail.com","Stitch"); //receiver 
$mail->addReplyTo("someplaceelse.com");

$mail->isHTML(true);
$mail->Subject = "Kirsten Is Spamming me";
$mail->Body = "<h1>SEND DR P or get an F</h1>";
print_r($mail);

if(!$mail->send())
{
    echo 'Message could not be sent ';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else{
    echo "message has been sent";
}