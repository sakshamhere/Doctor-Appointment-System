<?php

if(isset($_POST['passset']))
{
	$conn=new mysqli("localhost:3307","root","","dasdatabase");
	$otp = $_POST['otp'];

	$sql = "select * from otp_expiry where otp='$otp' and is_expired!=1";

	$result=$conn->query($sql);

	if($result)
	{
      $sql = "update otp_expiry set is_expired='1' where otp='$otp' ";

      echo "Sussessful";;
	}

}
   
?>