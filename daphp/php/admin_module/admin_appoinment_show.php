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
<nav class="navbar navbar-dark navbar-expand-sm bg-dark ">
	<a href="dashboard.php" class="navbar-brand mr-auto ml-auto">Dashboard</a>
	<div class="container-fluid">
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navresponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navresponsive">
			<ul class="navbar-nav  ">
				<!-- <li class="nav-item active"><a href="index.html" class="nav-link ">Home</a></li> -->
				<li class="nav-item"><a href="admin_appoinment_show.php" class="nav-link active ">Appoinments</a><ul class="ulnav">
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

<style type="text/css">
	body
    {
	background-color:#2C3335;
    }
</style>

	<center>
	`

<table class="table table-striped table-bordered table-hover table-dark animated fadeIn" style="animation-delay: .5s; margin-top: 10px; color: #01CBC6">
	<thead><tr>
		<th style="color: red">Delete</th><th>patient Name</th><th>Mobile</th><th>Email</th><th>appoinment date</th><th>appoinment time</th><th>doctor_consult</th><th>Edit</th></tr>
		<?php 

$conn =new mysqli("localhost:3306","root","","dasdatabase");

$sql="select * from appoinment_table";

$result=$conn->query($sql);

if($result)
{
	while($row=$result->fetch_assoc())
	{


?>     <tr>  <td><form method="post" action="delete.php"><input type="hidden" name="record" class="btn btn-primary" id="check" value="<?php echo $row["id"];?>"><input type="submit" name="records" value="delete" class="btn"></form></td>
			<td><?php echo $row["fullname"]?></td>
			<td><?php echo $row["mob"]?></td>
			<td><?php echo $row["email"]?></td>
			<td><?php echo $row["date"]?></td>
			<td><?php echo $row["time"]?></td>
			<td><?php echo $row["doctor_consult"]?></td>

			<td><form action="edit_appoinment.php" method="post"><input type="hidden" name="data" value=<?php echo $row["email"]?>>
		<input class="btn" type="submit" name="submit" value=edit></form></td>
		</tr>
	</thead>
	<?php 
}
}?>
</table>
</center>
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