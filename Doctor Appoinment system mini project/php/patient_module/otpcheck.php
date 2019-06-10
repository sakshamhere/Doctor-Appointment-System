<?php
if(isset($_POST['otpset']))
{
	$otp =$_POST['otp'];
	 $conn= new mysqli("localhost:3306","root","","dasdatabase");
	 $sql = "select * from otp_expiry where otp='$otp' and is_expired!=1";
     $mail=$_POST["mail"];

	 $result=$conn->query($sql);

	if($result)
	{
      $sql = "update otp_expiry set is_expired = 'yes' where otp='$otp' ";
      $result=$conn->query($sql);
      if($result)
      {
      	 $sql = "select * from patient_regtable where email ='$mail'";
            
             $result=$conn->query($sql);

             if($result)
             {
             	while($row=$result->fetch_assoc())
             	{
             		$name=$row["name"];
             		$password=$row["password"];
             	}
             }

      	 session_start();
         $_SESSION["email"]=$mail;
         $_SESSION["password"]=$password;

         $_SESSION["name"]= $name;
  
        header('location:welcome.php');
      }

   
	}

}

?>