<?php

  if(isset($_POST["username"])&&isset($_POST["Password"]))
  {

  $user=$_POST["username"];

  $Pass=$_POST["Password"];

  $conn= new mysqli("localhost:3306","root","","dasdatabase");
  $sql="select username,password from admin_logintable where username='$user' and password='$Pass'";
     
  $result=$conn->query($sql);
  
  $rows=$result->num_rows;
 
   $row=$result->fetch_assoc();
   echo $rows["username"];
  if($rows>0)
  {
    
    session_start();
    $_SESSION["username"]=$_POST["username"];
    $_SESSION["password"]=$_POST["Password"];

    
    header('location:dashboard.php');
    
  }
  
  else
  {
    ?>
   <script >
    if(confirm("invalid login/Password"))
    {
       window.location.href='../../static/admin.html';
 }
   </script><?php 
   
  }
  }
  else
    {
      header("location:admin.html");
    }
?>  


