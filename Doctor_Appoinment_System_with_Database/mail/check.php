

<?php 





if(isset($_POST['set']))
{
	$mail =$_POST["email"];
	echo $mail;
	$conn=new mysqli("localhost:3307","root","","dasdatabase");

	$sql = "select * from patient_regtable where email='$mail'";

	$result =$conn->query($sql);

	if($result)
	{
		//generate otp
		$otp = rand(100000,999999);
		$val=0;
		//send otp
		$mail_status = sendOTP($_POST["email"],$otp);
    
		if($mail_status == 1)
		{
			$sql ="insert into otp_expiry(otp,is_expired) values('".$otp."','".$val."')";

			$result = $conn->query($sql);

			if($result)
			{
				$success = 1;
			}
		}
		
	}
	else
	{
		echo "mail dosn't exist";
	}


}
?>

<?php

function sendOTP($email,$otp)
{
	require('PHPMailer.php');

	$message_body = "one time password for login is:<br/><br/>" . $otp;

	$mail = new PHPMailer;

    // $mail->From         = 'sam9111doshi@gmail.com';
    // $mail->FromName     = 'saksham doshi';

	$mail->AddReplyTo('sam9111doshi@gmail.com','saksham doshi');
	$mail->SetFrom('sam9111doshi@gmail.com','saksham doshi');
	$mail->AddAddress($email);
	$mail->Subject ="otp to login";
	$mail->MsgHTML($message_body);
	$result=$mail->Send();

	if($result)
	{
		return $result;
	}
	else
	{
		echo "error" .$mail->ErrorInfo;
	}
}

?>

<?php 
if($success==1)
{
	?>
	<form action="checkotp.php" method="post">
		<div>
		<label>Enter Otp</label>
		<input type="text" name="otp">
        </div>

        <div>
        	<label>Enter one time password</label>
        	<input type="text" name="onetimepass">
        	<input type="submit" name="passset">
        </div>
	</form>
	<?php
}
?>
