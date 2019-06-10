<?php



  $email=$_POST["mail"];
  $password=$_POST["password"];
  $conn= new mysqli("localhost:3306","root","","dasdatabase");
  $sql="select * from doctor_register where mail ='$email' and password='$password' ";

  $result=$conn->query($sql);
  $rows=$result->num_rows;
  echo $rows;
   $row=$result->fetch_assoc();
  if($rows>0)
  {
    
    session_start();
    $_SESSION["email"]=$_POST["mail"];
    $_SESSION["password"]=$_POST["password"];

    $_SESSION["name"]= $row["name"];
     header('location:dashboard.php');
  }
  else
  {?>
   <script type="text/javascript">alert("incorrect login/password")
   window.location='doctor_login.php';
   </script><?php 
   
  }


?>