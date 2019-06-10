<?php
session_start();
$name= $_SESSION["username"];
if(isset($_SESSION["username"]))
{
?>





<!DOCTYPE html>
<html>
<head>
	<title>Schedules</title>
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
				<li class="nav-item"><a href="schedule.php" class="nav-link active">Schedules</a></li>
<!-- 				<li class="nav-item"><a href="#" class="nav-link">My profile</a></li>
 -->				<li class="nav-item"><a href="destroy_session.php" class="nav-link"><span class="spancolor">log out</span></a></li>

			</ul>
		</div>
		
	</div>

</nav>
<center>
<div class="col-md-6">
	
	<table class="table table-striped table-bordered table-hover table-light animated fadeIn">
		<tr><th>Doctor's Name</th><th>Fee</th><th>Availible From</th><th>To</th><th>Edit</th></tr>
<?php

$conn =new mysqli("localhost:3306","root","","dasdatabase");
$sql ="select * from appoinment_schedule a,payment_schedule b where a.doctor_name=b.doctor_name ";

$result=$conn->query($sql);

if($result)
{

  while($row=$result->fetch_assoc())
  {


?>


		
		<tr><td><?php echo $row["doctor_name"]?></td><td><?php echo $row["fees"]?>/-</td><td><?php echo $row["start_time"]?> AM</td><td><?php echo $row["end_time"]?> PM</td><td><form action="edit_schedule.php" method="post"><input type="submit" class="btn  btn-outline-secondary" name="edit" value="Edit"><input type="hidden" name="dname" value=<?php echo $row["doctor_name"];?>></form></td></tr>
	

</div>

<?php
}
}?>
</table>
</div></center>
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
      window.location.href="../../admin.html";
     }
</script>
<?php
}
?>