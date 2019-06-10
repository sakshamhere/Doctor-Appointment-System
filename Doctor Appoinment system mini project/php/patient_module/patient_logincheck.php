<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link href="style.css" rel="stylesheet">
</head>
<body>

<Style>
  body
    {
  background-color: #4C4B4B;
    }
    .nav-item a
    {
      color: #67E6DC;
    }
  </Style>
<center><h3 class="animated bounceInLeft spancolor" style="animation-iteration-count:;animation-timing-function: 3">Please Check your Mail!</h3></center>



<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



  $email=$_POST["mail"];
  $password=$_POST["password"];
  $conn= new mysqli("localhost:3306","root","","dasdatabase");
  $sql="select * from patient_regtable where email ='$email' and password='$password' ";

  $result=$conn->query($sql);
  $rows=$result->num_rows;

   $row=$result->fetch_assoc();
  if($rows>0)
  { 


/////////////////////////////////////////////////////////////////////////////////////////
  
  $otp = rand(100000,999999);
  $val=0;
  $sql ="insert into otp_expiry(otp,is_expired) values('".$otp."','".$val."')";
  $result = $conn->query($sql);






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
$mail->Subject = "My appoinment(Majime)";

//set body
$mail->Body = "your One time OTP by majime:" .$otp ;

//set who is sending email
$mail->setFrom('sam9111doshi@gmail.com','Saksham doshi');

//set where we are sending email
$mail->addAddress($email);


//send email
if($mail->send())
{
  // session_start();
     $mail=$_POST["mail"];
  //   $_SESSION["password"]=$_POST["password"];

  //   $_SESSION["name"]= $row["name"];
  
   if($result)
      {
        ?> 

        <div class="continer-fliuid">
          <div class="card" style="margin:auto;width: 600px;">
            <div class="card-header">Enter your otp</div>
            <div class="card-body">
        <form action="otpcheck.php" method="post" >
          <input type="hidden" name="mail" value=<?php echo $mail?>>
       
        <input type="text" name="otp" class="form-control">
        <hr class="light">
        <center><input type="submit" name="otpset" value="verify" class="btn btn-primary" placeholder="otp here.."></center>
        </form></div>
      </div>
    </div>

        <?php
      }

}
else
{
  echo $mail->ErrorInfo;
}
//echo !extension_loaded('openssl')?"Not Available":"Available";

//////////////////////////////////////////////////////////////////////////////////
   
  }



  else
  {?>
   <script type="text/javascript">alert("incorrect login/password")
   window.location='patient_login.php';
   </script><?php 
   
  }

?>
</body>
</html>