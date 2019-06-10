<?php 
$conn= new mysqli("localhost:3306","root","","dasdatabase");
$name =$_POST["name"];
$mail =$_POST["mail"];
$mob =$_POST["mob"];
$dob =$_POST["dob"];
$address =$_POST["address"];
$designation =$_POST["designation"];
$city=$_POST["city"];

  $sql="update doctor_register set name='$name',mail='$mail',mob='$mob',dob='$dob',address='$address',city='$city',designation='$designation' where mail='$mail'";

  $result=$conn->query($sql);
  if($result)
  {
  	header('location:dashboard.php');
  }



?>