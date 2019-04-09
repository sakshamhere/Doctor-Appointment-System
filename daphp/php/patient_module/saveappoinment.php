<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();
if(isset($_SESSION["email"])&&isset($_SESSION["password"]))
{
 


?> 







<?php  


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';






if(isset($_POST["book"]))
{
echo $_SESSION["mob"];
// $name=$_SESSION["fname"]
// $mob=$_SESSION["mob"];
// $email=$_SESSION["tmail"];
//  $datetime=$_SESSION["date"];

$conn = new mysqli("localhost:3306","root","","dasdatabase");

$sql ="insert into appoinment_table(fullname,mob,email,date,time,doctor_consult) values('".$_SESSION["fname"]."','".$_SESSION["mob"]."','".$_SESSION["tmail"]."','".$_SESSION["date"]."','".$_SESSION["time"]."','".$_SESSION["dname"]."')";

$result=$conn->query($sql);


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
$mail->Subject = "My appoinment(Majime)";

//set body
$mail->Body = "your Appoinment has been booked Successfully \n On  :  " .$_SESSION["date"]."\n At : ".$_SESSION["time"]."\n with : ".$_SESSION["dname"]."\n-majime" ;

//set who is sending email
$mail->setFrom('sam9111doshi@gmail.com','Saksham doshi');

//set where we are sending email
$mail->addAddress($_SESSION["tmail"]);

if($mail->send())
{



header('location:bookedsuccessfully.php');
  }
}

?>



<?php
}
else
{
?>
<script>
     if(confirm("please login to proceed"))
     {
      window.location.href="../patient_login.php";
     }
</script>
<?php
}
?>