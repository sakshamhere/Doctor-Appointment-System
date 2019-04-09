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

<script type="text/javascript" >
   function preventBack()
   {
   	 window.history.forward();
    }
    setTimeout("preventBack()", 0);
    window.onunload=function()
    { 
    	null
    };
</script>

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
				<li class="nav-item"><a href="bookappoinment.php" class="nav-link ">Book appoinment</a><ul class="ulnav">
					<!-- <li><a href="registeration.html">AS a Patient</a></li>
					<li><a href="registeration2.html">As a Doctor</a></li> -->
				</ul></li>
				<li class="nav-item"><a href="myappoinment.php" class="nav-link" ">My appoinments</a></li>
				<li class="nav-item"><a href="canselappoinment.php" class="nav-link">Cancel Appoinment</a></li>
				<!-- <li class="nav-item"><a href="#" class="nav-link">Medicinal prescription</a></li> -->
				<li class="nav-item"><a href="../admin_module/doctors_availible.php" class="nav-link">doctor's available</a></li>
				<li class="nav-item"><a href="destroy_session.php" class="nav-link"><span class="spancolor">log out</span></a></li>

			</ul>
		</div>
		
	</div>

</nav>
<br>
<center><h1 class=" animated fadeInDown spancolor">Welcome <?php echo $_SESSION["name"];?></h1></center>

<hr class="light">
<br>

<div class="container-fluid">
	<div class="row">
<div class="col-md-3"><button class="btn btn-outline-secondary btn-lg animated zoomIn" style="animation-delay: 0.5s; background-color: #2B2B52;"><a style="text-decoration: none; color: #F9F3EB; " href="bookappoinment.php" data-toggle="tooltip" title="Wanna book appoinments,click to proceed">Quick Appoinment</a></button></div>

<div class="col-md-3"><button class="btn btn-outline-secondary btn-lg animated zoomIn" style="animation-delay: 1s;background-color:#F9F3EB;"><a style="text-decoration: none;color:#2B2B52; " href="canselappoinment.php" data-toggle="tooltip" title="Wanna Cansel your bookin??!!">Cancel Appoinment</a></button></div>


<div class="col-md-3"><button class="btn btn-outline-secondary btn-lg animated zoomIn" style="animation-delay: 1.5s; background-color: #2B2B52;"><a style="text-decoration: none;color: #F9F3EB" href="myappoinment.php" data-toggle="tooltip" title="Wanna go through your appoinments,click to proceed">Review Appoinment</a></button></div>


<div class="col-md-3" ><button class="btn btn-outline-secondary btn-lg animated zoomIn" style="animation-delay: 2s;background-color:#F9F3EB;"><a style="text-decoration: none;color:#2B2B52 " href="../admin_module/doctors_availible.php" data-toggle="tooltip" title="Wanna know more about your doctor,click to proceed">My Doctor</a></button></div>
</div>
</div>
<br>
<hr class="light">
<br>
<!-- jumbotron -->
<div class="container-fluid">
<div class=" jumbotron text-center animated zoomIn"  style="animation-delay: 2.5s;border-radius: 5px; background-color: #2C3335;color: #01CBC6;">
	<h3 class="display-4">did you know!</h3>
	<p>Register your details to us,make an account,proceed with your appoinment requirements and you are done!</p>
	<p>Health care is changing with a new emphasis on patient-centeredness. Fundamental to this transformation is the increasing recognition of patients' role in health care delivery and design. Medical appointment scheduling, as the starting point of most non-urgent health care services, is undergoing major developments to support active involvement of patients. By using the Internet as a medium, patients are given more freedom in decision making about their preferences for the appointments and have improved access.</p>

	
</div>
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
