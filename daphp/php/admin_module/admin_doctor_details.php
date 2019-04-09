<?php

session_start();
$name= $_SESSION["username"];
if(isset($_SESSION["username"]))
{
?>
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link href="style.css" rel="stylesheet">
</head>
<body>
<style type="text/css">
	body
    {
	background-color:#2C3335;
    }
 .mycards
 {
 	padding: 10px;
 	margin:10px;
 	margin-top: 10px;
 	margin-left: 10px;
 	margin-bottom: 10px;

 }  
 .card
 {
 	
 	margin-top: 10px;
 	margin-left: 10px;
 	border-radius: 0px;
 	transition: .5s;
 	left: 350px;
 	position: absolute;
 	
 } 
 .card:hover
 {
   border-radius: 0px;
 }
 .card li
 {
 	list-style: none;
 	text-decoration: none;
 }
 .card-header
 {
   color:#6AB04A;
   font-weight: 10;
 }
 .card-footer
 {

 }
 .card-body
 {

 }
.topnav .s
{
  	border:none;
	outline: none;
	background-color: transparent;
	border-bottom: 1px solid #01CBC6;

}
.fa
{
	color: #01CBC6;

}
.bb
{
	transition: .5s;
	background-color: #6AB04A;
}
.bb:hover
{
  color: #fff;
  background-color: #2C3335;
  width: 150px;
}

 </style>




<nav class="navbar navbar-dark navbar-expand-sm bg-dark ">
	<a href="dashboard.php" class="navbar-brand mr-auto ml-auto">Dashboard</a>
	<div class="container-fluid">
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navresponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navresponsive">
			<ul class="navbar-nav  ">
				<!-- <li class="nav-item active"><a href="index.html" class="nav-link ">Home</a></li> -->
				<li class="nav-item"><a href="admin_appoinment_show.php" class="nav-link  ">Appoinments</a><ul class="ulnav">
					<!-- <li><a href="registeration.html">AS a Patient</a></li>
					<li><a href="registeration2.html">As a Doctor</a></li> -->
				</ul></li>
				<li class="nav-item"><a href="admin_patient_show.php" class="nav-link  ">Paitents</a></li>
				<li class="nav-item"><a href="admin_doctor_show.php" class="nav-link active">Doctors</a></li>
				<li class="nav-item"><a href="schedule.php" class="nav-link">Schedules</a></li>
<!-- 				<li class="nav-item"><a href="#" class="nav-link">My profile</a></li>
 -->				<li class="nav-item"><a href="destroy_session.php" class="nav-link"><span class="spancolor">log out</span></a></li>

			</ul>
		</div>
		
	</div>

</nav>
<!-- search bar -->

<div class="topnav">
	<center>
  <div>

  	<a><i class="fa fa-search" aria-hidden="true"></i></a>
  <input type="text" placeholder=" Search.." class="s">
<input type="submit" class="btn" name="" value="search">

  
  </div>
 
</div>
</center>

<!-- search bar -->






<div class="row mycards">
<?php
if(isset($_POST['submit']))
{

$name=$_POST['name'];

$conn= new mysqli("localhost:3306","root","","dasdatabase");
$sql="select * from doctor_register where name='$name'";

$result=$conn->query($sql);


if($result)
{
$row=$result->fetch_assoc() 
	
      ?>
     <center>
      <div class="card animated bounceInUp" style="">
      	<img class="card-img-top" src="<?php echo $row['upload'] ?>" alt="Card image">
      	<div class="card-body">
      		<table class="table">
      			<tr><td>Name</td><td><?php echo $row["name"]?></td></tr>
      			<tr><td>Designation</td><td><?php echo $row["designation"]?></td></tr>
      			<tr><td>Mail</td><td><?php echo $row["mail"]?></td></tr>
      			<tr><td>Mobile</td><td><?php echo $row["mob"]?></td></tr>
      			<tr><td>Address</td><td><?php echo $row["address"]?></td></tr>
      			<tr><td>City</td><td><?php echo $row["city"]?></td></tr>
      			<tr><td>Dob</td><td><?php echo $row["dob"]?></td></tr>
      		</table>
      	</div>
      	<div class="card-footer"></div>
      </div>
  </center>
 


    <?php 
    
}

}
?>
</div>

</body>
</html>
<?php
}
else
{
?>
<script>
     if(confirm("please login to proceed"))
     {
      window.location.href="../../admin.html";
     }
</script>
<?php
}
?>