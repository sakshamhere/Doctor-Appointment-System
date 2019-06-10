<?php
session_start();
$name= $_SESSION["username"];
if(isset($_SESSION["username"]))
{
?>





<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
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
<style type="text/css">
	body
    {
	background-color:#2C3335;
    }
    .list
    {
    	
    	list-style: none;
    	margin: px;
    }
    .list li
    {
    	padding: 15px;
    	text-decoration-line: none;
    	transition: .5s;
    }
    .list a
    {
    	color: #01CBC6;
    	text-decoration: none;
    	outline: none;
    	border-bottom: none;
    	text-decoration-line: none;
    }
    .list li:hover
    {
    	margin-left: 5%;
    }
    .list a:hover
    {
    	color: #fff;
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
				<li class="nav-item"><a href="../patient_module/admin_patient_show.php" class="nav-link  ">Paitents</a></li>
				<li class="nav-item"><a href="admin_doctor_show.php" class="nav-link ">Doctors</a></li>
				<li class="nav-item"><a href="schedule.php" class="nav-link">Schedules</a></li>
<!-- 				<li class="nav-item"><a href="#" class="nav-link">My profile</a></li>
 -->				<li class="nav-item"><a href="destroy_session.php" class="nav-link"><span class="spancolor">log out</span></a></li>

			</ul>
		</div>
		
	</div>

</nav>

<div class="container-fluid" style="padding: 10px; margin: 20px;" >
	<div class="row">
		<div class="col-md-6" style="color: #01CBC6; font-size: ;">
			<ul class="list">
				<li class="animated fadeInRight" style="animation-delay: .1s"><a href="admin_appoinment_show.php">Edit appoinments </a></li>
				<li class="animated fadeInRight" style="animation-delay: .2s"><a href="admin_doctor_show.php">Edit Doctor records</a></li>
				<li class="animated fadeInRight" style="animation-delay: .2s"><a href="admin_patient_show.php">Edit patient records</a></li>
				<li class="animated fadeInRight" style="animation-delay: .3s"><a href="">Edit Appoinment Scedules</a></li>
				<li class="animated fadeInRight" style="animation-delay: .4s"><a href="">Edit fee Structure</a></li>
				<li class="animated fadeInRight" style="animation-delay: .5s"><a href="admin_appoinment_bookingphp.php">Book appoinment</a></li>
				<li class="animated fadeInRight" style="animation-delay: .6s"><a href="admin_patient_register.php">Add patient record</a></li>
				<li class="animated fadeInRight" style="animation-delay: .7s"><a href="admin_doctor_register.php">Add doctor record</a></li>
			</ul>
		</div>
		<div class="col-md-6 animated fadeIn" style="color: #EA7773; font-size: ; padding:;text-align: left; animation-delay: 1s;">
			<article>
				<h4>There you go!</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</article>
		</div>
	</div>
</div>
<hr class="light">
<center><span style="color: #EA7773">majimewebdesigns</span></center>
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
      window.location.href="../../static/admin.html";
     }
</script>
<?php
}
?>