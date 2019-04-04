<?php
session_start();
if(isset($_SESSION["email"])&&isset($_SESSION["password"]))
{
 


?> 







<?php  

if(isset($_POST["book"]))
{
echo $_SESSION["mob"];
// $name=$_SESSION["fname"]
// $mob=$_SESSION["mob"];
// $email=$_SESSION["tmail"];
//  $datetime=$_SESSION["date"];

$conn = new mysqli("localhost:3307","root","","dasdatabase");

$sql ="insert into appoinment_table(fullname,mob,email,date,time,doctor_consult) values('".$_SESSION["fname"]."','".$_SESSION["mob"]."','".$_SESSION["tmail"]."','".$_SESSION["date"]."','".$_SESSION["time"]."','".$_SESSION["dname"]."')";

$result=$conn->query($sql);

header('location:bookedsuccessfully.php');
  }
?>

<?php 

// if(isset($_POST["edit"]))
// {

// $name=$_SESSION["fname"]
// $mob=$_SESSION["mob"];
// $email=$_SESSION["tmail"];
//  $datetime=$_SESSION["date"];

// $conn = new mysqli("localhost:3307","root","","dasdatabase");

// $sql ="insert into appoinment_table(fullname,mob,email,datetime) values('".$name."','".$mob."','".$email."','".$datetime."')";

// $result=$conn->query($sql);

// header('location:.php');
// }
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