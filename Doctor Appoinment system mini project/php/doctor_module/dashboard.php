<?php
session_start();
if(isset($_SESSION["email"])&&isset($_SESSION["password"]))
{
 


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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link href="style.css" rel="stylesheet">

<!-- <script type="text/javascript" >
   function preventBack()
   {
   	 window.history.forward();
    }
    setTimeout("preventBack()", 0);
    window.onunload=function()
    { 
    	null
    };
</script> -->

</head>
<body>
	<Style>
	body
    {
	background-color: #4C4B4B;
    }
    .nav-item a
    {
    	color: #67E6DC;
    }
</Style>
<!-- navigation -->
<nav class="navbar navbar-dark navbar-expand-sm bg-dark ">
	<a href="welcome.php" class="navbar-brand mr-auto ml-auto">Dashboard</a>
	<div class="container-fluid">
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navresponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navresponsive">
			<ul class="navbar-nav  ">
				<!-- <li class="nav-item active"><a href="index.html" class="nav-link ">Home</a></li> -->
				<li class="nav-item"><a href="myappoinments.php" class="nav-link ">My Appoinments</a>
					<!-- <li><a href="registeration.html">AS a Patient</a></li>
					<li><a href="registeration2.html">As a Doctor</a></li> -->
				<!-- </ul></li>
				<li class="nav-item"><a href="myappoinment.php" class="nav-link" ">My appoinments</a></li>
				<li class="nav-item"><a href="canselappoinment.php" class="nav-link">Cancel Appoinment</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Medicinal prescription</a></li>
				<li class="nav-item"><a href="../admin_module/doctors_availible.php" class="nav-link">doctor's available</a></li>-->
				<li class="nav-item"><a href="destroy_session.php" class="nav-link"><span class="spancolor">log out</span></a></li> 

			</ul>
		</div>
		
	</div>

</nav>
<br>
<center><h1 class=" animated fadeInDown spancolor">Dr. <?php echo $_SESSION["name"];?></h1></center>

<hr class="light">
<br>
<div class="container-fluid">
	<div class="container">
	
		<table class="table  table-hover table-dark animated fadeIn" style="animation-delay: .5s; margin-top: 10px; color: #01CBC6;text-align: ;">
	<thead>
<?php

$conn =new mysqli("localhost:3306","root","","dasdatabase");


	$val=$_SESSION["email"];
     
	$sql="select * from doctor_register where mail='$val'";

	$result=$conn->query($sql);
   
	if($result)
	{
		while($row=$result->fetch_assoc())
		{
			?><form action="doctor_edit.php" method="post">
			 <tr>
			<td><label>Name</label></td><td><?php echo $row["name"]?></td></tr><tr>
			<td><label>Mobile</label></td><td><?php echo $row["mob"]?></td></tr><tr>
			<td><label>Email</label></td><td><?php echo $row["mail"]?></td></tr><tr>
			<td><label>DOB</label></td><td><?php echo $row["dob"]?></td></tr>
			<tr>
			<td><label>Address</label></td><td><?php echo $row["address"]?></td></tr><tr>
			<tr>
			<td><label>City</label></td><td><?php echo $row["city"]?></td></tr><tr>
			<td><label>Designation</label></td><td><?php echo $row["designation"]?></td></tr><tr>	
		</tr>
		<td colspan="2"><center><input type="submit" class="btn" name="edit" value="Edit"></form></center></td>

<?php
		}
	}


?>
</table>
</div></div>


<br>
<?php
}
else
{
?>
<script>
     if(confirm("please login to proceed"))
     {
     	window.location.href="doctor_login.php";
     }
</script>
<?php
}
?>
