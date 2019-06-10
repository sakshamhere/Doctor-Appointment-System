
<?php  

if(isset($_POST["set"]))
{

$dname=$_POST["name"];

$t1=$_POST["t1"];

$t2=$_POST["t2"];

$t3=$_POST["t3"];

$t4=$_POST["t4"];

$t5=$_POST["t5"];

$t6=$_POST["t6"];

$t7=$_POST["t7"];

$t8=$_POST["t8"];

$t9=$_POST["t9"];

$t10=$_POST["t10"];

$t11=$_POST["t11"];




$conn = new mysqli("localhost:3306","root","","dasdatabase");

$sql ="insert into time_slot(Doctor_name,time1,time2,time3,time4,time5,time6,time7,time8,time9,time10,time11) values('".$dname."','".$t1."','".$t2."','".$t3."','".$t4."','".$t5."','".$t6."','".$t7."','".$t8."','".$t9."','".$t10."','".$t11."')";

$result=$conn->query($sql);

if($result)
{
header('location:admin_doctor_register.php');
}
{
  echo "error";
}
}
?>
