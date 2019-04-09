<?php
print_r($_FILES);
if(isset($_FILES['fileupload']['tmp_name']))
{
	echo "string";


}

if(isset($_POST['btn']))
{
$name=$_POST["name"];
$mail=$_POST["mail"];
$mob=$_POST["mob"];
$dob=$_POST["dob"];
$address=$_POST["address"];
$city=$_POST["city"];
$password1=$_POST["password"];
$confirmpass=$_POST["confirmpass"];
$Designation=$_POST['Designation'];
$fee =$_POST['fee'];
$start=$_POST['start'];
$end=$_POST['end'];

$servername="localhost:3306";
$username="root";
$password="";
$dbname="dasdatabase";


$conn= new mysqli($servername,$username,$password,$dbname);

if($conn==TRUE)
{
	echo "connected";
}
else
{
	echo "not connected";
}


$target_dir='uploadsdoctor/';
$target_file=$target_dir . basename($_FILES["fileupload"]['name']);
$uploadok=1;

$imagefiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (isset($_POST['btn'])) {
	$check=getimagesize($_FILES['fileupload']['tmp_name']);
	if($check!==false)
	{
		$uploadok=0;
	}
	# code...
}


	if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$target_file))
	{
		echo "uploaded";
	}
	else
	{
		echo "not";
	}








$sql="insert into doctor_register(name,mail,mob,dob,address,city,password,confirmpass,upload,designation) values ('".$name."','".$mail."','".$mob."','".$dob."','".$address."','".$city."','".$password1."','".$confirmpass."','".$target_file."','".$Designation."')";
$result=$conn->query($sql);

$sql2="insert into payment_schedule(fees,doctor_name) values('".$fee."','".$name."')";

$result=$conn->query($sql2);

$sql3="insert into appoinment_schedule(doctor_name,start_time,end_time) values('".$name."','".$start."','".$end."')";

$result=$conn->query($sql3);

if($result)
{
	
	header('location:admin_doctor_show.php');
}

else
{
	echo "error".$conn->error;
}
}

?>