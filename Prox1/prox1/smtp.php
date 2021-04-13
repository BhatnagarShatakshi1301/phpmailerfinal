<?php
echo smtp_mailer('prakhartiwari1799@gmail.com','Hello its shatakshi','helloo');
function smtp_mailer($to,$subject, $msg){
require_once("smtp/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug =1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'TLS';
$mail->Host = "smtp.sendgrid.net";
$mail->Port = 587;
$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';
$mail->Username = " mahesh.sharma@fintastiq";
$mail->Password = "Mahesh@1234";
$mail->SetFrom("shatakshi13.me@gmail.com");
//$mail->addAttachment("");
$mail->Subject = $subject;
$mail->Body =$msg;
$mail->AddAddress($to);
if(!$mail->Send()){
return 0;
}else{
return 1;
}
}
?>
