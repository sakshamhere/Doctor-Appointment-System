<?php
session_start();

if(isset($_SESSION["email"])&&isset($_SESSION["password"]))
{
  header('location:dashboard.php');
}
else{
?>






<!DOCTYPE html>
<html>
<head>
	<title>bootstrap magic</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">

</head>
<body>
	 <style type="text/css">

  body
    {
  background-color: #4C4B4B;
  height: 100%;
  width: 100%;
  background-attachment: fixed;
  background-size: cover;
    }
   .loginbox
   {
    position: absolute;
    top:55%;
    left:50%;
    transform: translate(-50%,-50%);
    background: #2F363F;
   color: #74B9FF;
    padding: 20px;
    border-radius: 10px;

   }
   .loginbox hr
   {
    width: 30%;
    border:0.5px solid #DAE0E2;
   }
   .loginbox div
   {
    margin: 50px;
   }
   .loginbox input
   {
    width: 100%;
    border:none;
    outline: none;
    padding: 10px;
    background: transparent;
    border-bottom: 1px solid #67E6DC;
    color: #fff;

   }
   .loginbox .one
   {
    position: absolute;
    top: 27%;
    pointer-events: none;
        transition: 0.5s;
        font-size: 20px;
   }
   .loginbox .two
   {
    position: absolute;
    top: 50%;
    pointer-events: none;
    transition: 0.5s;
    font-size: 20px;
   }
   .loginbox input:focus ~ .one
   {
    top:20%;
    color: #67E6DC;
    font-size: 15px;
   }
    .loginbox input:focus ~ .two   
   {
    top:45%;
    color: #67E6DC;
    font-size: 15px;
   }
   
    .loginbox button
    {
      padding: 10px;
      color: #67E6DC;
      font-size: 17px;
      outline: none;
      border:1px solid #74B9FF;
    }
    .forgotpass a
    {
      color: #74B9FF;
    }
    .forgotpass a:hover
    {
      color: #67E6DC;
    }
  </style>
<!-- navigation -->
<nav class="navbar navbar-dark navbar-expand-sm bg-dark ">
  <a href="../../index.html" class="navbar-brand mr-auto ml-auto">My Appoinment</a>
  <div class="container-fluid">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navresponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navresponsive">
      <ul class="navbar-nav  ">
        <!-- <li class="nav-item active"><a href="index.html" class="nav-link ">Home</a></li> -->
        
        <li class="nav-item"><a href="../../static/about.html" class="nav-link">About us</a></li>
        <!-- <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Home</a></li> -->

      </ul>
    </div>
    <!-- <a href="#" style="outline: none;text-decoration: none;"><span class="spancolor">Log in</span</a> -->
  </div>

</nav>
<!-- login div -->
<br>
<form action="doctor_logincheck.php" method="post">
<div class="loginbox">
  <center><h3><span class="spancolor">Log</span>in</h3></center>
  <hr>
  <div>
  <input type="text" name="mail" id="name" required="">
  <label class="one">mail/mobile</label>
    </div>
    <div>
  <input type="password" name="password" id="password" required="">
  <label class="two">password</label>
  
    </div>
    <div>
        <span class="forgotpass"><a href="#" style="text-decoration: none;">forgot password?</a></span>
    <button class="btn btn-outline-secondary btn-sm" type="submit" name="submitbtn" onclick=" return validate()">Next</button>
  
</div>

</div>
</form>
</body>
</html>


<style type="text/css">

@media (min-width: 1281px) {
  
  
}

/* 
  ##Device = Laptops, Desktops
  ##Screen = B/w 1025px to 1280px
*/

@media (min-width: 1025px) and (max-width: 1280px) {
  
 
  
}

/* 
  ##Device = Tablets, Ipads (portrait)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) {
  
 
  
}

/* 
  ##Device = Tablets, Ipads (landscape)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  

  
}

/* 
  ##Device = Low Resolution Tablets, Mobiles (Landscape)
  ##Screen = B/w 481px to 767px
*/

@media (min-width: 481px) and (max-width: 767px) 
{
  .loginbox
  {
    position:relative;
    top: 300px;
    width: 100%;
    background: #2F363F;
    color: #74B9FF;
    padding: 20px;
    border-radius: 10px;
  }
}

/* 
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/

@media (min-width: 320px) and (max-width: 480px) {
  

   .loginbox
  {
    position:relative;
    top: 300px;
    width: 100%;
    background: #2F363F;
    color: #74B9FF;
    padding: 20px;
    border-radius: 10px;
  }
  
}   
</style>
<?php

// if(isset($POST["submitbtn"]))
// {
//   $conn= new mysqli("localhost:3306","root","","dasdatabase");
//   $sql="select username from patient_regtable where email ='".$POST["email"]."' and password='".$_POST["password"]."'  ";

//   $result=$conn->query($sql);
//   $rows=$result->num_rows;
//   if($rows>0)
//   {
//     session_start();
//     $_SESSION["email"]=$_POST["mail"];
//     $_SESSION["password"]=$_POST["password"];
//     header('location:welcome.php');
//   }
//   else
//   {
//     echo "<script> alert('incorrect details') </script>";
//   }
// }
}
?>
