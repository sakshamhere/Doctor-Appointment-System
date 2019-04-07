<?php
session_start();
$name= $_SESSION["username"];
if(isset($_SESSION["username"]))
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>bootstrap magic</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <script type="text/javascript" src="../../js/form.js" ></script>

 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	

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

	</style>
<!-- navigation -->
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
<!-- two coloumn section -->
<center><h3 class="animated bounceInLeft spancolor" style="animation-iteration-count:;animation-timing-function: 3">Add time slots</h3></center>
<form action="savetimeslot.php" method="post">
<center>
	<table style="color: #74B9FF">
		<tr><td>Doctor's Name</td><td><input type="text" name="name" class="tableinput"></td></tr>
		<tr><td>Time</td><td><input type="time" name="t1" class="tableinput"></td></tr>
		<tr><td>Time</td><td><input type="time" name="t2" class="tableinput"></td></tr>
	    <tr><td>Time</td><td><input type="time" name="t3" class="tableinput"></td></tr>
	   	<tr><td>Time</td><td><input type="time" name="t4" class="tableinput"></td></tr>
	   	<tr><td>Time</td><td><input type="time" name="t5" class="tableinput"></td></tr>
	   	<tr><td>Time</td><td><input type="time" name="t6" class="tableinput"></td></tr>
        <tr><td>Time</td><td><input type="time" name="t7" class="tableinput"></td></tr>
        <tr><td>Time</td><td><input type="time" name="t8" class="tableinput"></td></tr>
        <tr><td>Time</td><td><input type="time" name="t9" class="tableinput"></td></tr>
        <tr><td>Time</td><td><input type="time" name="t10" class="tableinput"></td></tr>
        <tr><td>Time</td><td><input type="time" name="t11" class="tableinput"></td></tr>
		
	</table>
	<br>
	<input class="btn" type="submit" name="set" value="Set">
</center></form>
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