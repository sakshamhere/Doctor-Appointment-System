<?php
//include PHPMailerAutoload.php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



//require 'PHPMailer/PHPMailerAutoload.php';

//create an instance of PHPMailerAutoLoad

$mail = new PHPMailer();

//set a host

$mail->Host = "smtp.gmail.com";

//enable SMTP
$mail->isSMTP();

//set authentication to true
$mail->SMTPAuth = true;

//set login details for gmail account
$mail->Username = "sam9111doshi@gmail.com" ;
$mail->Password = "7869651311";

//set type of protection
$mail->SMTPSecure = "ssl"; //or we can use TSL

//set a port
$mail->Port = 465; //or  587 if TSL

//set subject
$mail->Subject = "testEmail";

//set body
$mail->Body = "this is our body";

//set who is sending email
$mail->setFrom('sam9111doshi@gmail.com','Saksham doshi');

//set where we are sending email
$mail->addAddress('sam9111doshi@gmail.com');


//send email
if($mail->send())
{
	echo "mail send";
}
else
{
	echo $mail->ErrorInfo;
}
echo !extension_loaded('openssl')?"Not Available":"Available";

?>