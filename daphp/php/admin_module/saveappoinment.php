<?php  

if(isset($_POST["book"]))
{

$name=$_POST["fname"];
$dname=$_POST["dname"];
$mob=$_POST["mob"];
$email=$_POST["email"];
$date=$_POST["date"];
$time=$_POST["time"];

$conn = new mysqli("localhost:3306","root","","dasdatabase");

$sql ="insert into appoinment_table(fullname,mob,email,date,time,doctor_consult) values('".$name."','".$mob."','".$email."','".$date."','".$time."','".$dname."',)";

$result=$conn->query($sql);

if($result)
{
header('location:admin_appoinment_show.php');
}
{
	echo "error";
}
}
?>

<?php 

if(isset($_POST["edit"]))
{

$name=$_POST["fname"];
$mob=$_POST["mob"];
$email=$_POST["email"];
 $date=$_POST["date"];
  $time=$_POST["time"];
   $dname=$_POST["dname"];

$conn = new mysqli("localhost:3306","root","","dasdatabase");

$sql ="update  appoinment_table set mob='$mob' ,fullname='$name',date='$date',email='$email',time='$time'    where date='$date' ";

$result=$conn->query($sql);
if($result)
{

	
	// echo $date;
	// echo $mob;
	// echo "string";
	header('location:admin_appoinment_show.php');
}
else
{
	echo $name;
}
//header('location:admin_appoinment_show.php');
}
?>