<?php
if(isset($_POST['otpset']))
{
	$otp =$_POST['otp'];
	 $conn= new mysqli("localhost:3307","root","","dasdatabase");
	 $sql = "select * from otp_expiry where otp='$otp' and is_expired!=1";


	 $result=$conn->query($sql);

	if($result)
	{
      $sql = "update otp_expiry set is_expired = 'yes' where otp='$otp' ";
      $result=$conn->query($sql);
      if($result)
      {
         header('location:welcome.php');
      }

   
	}

}

?>