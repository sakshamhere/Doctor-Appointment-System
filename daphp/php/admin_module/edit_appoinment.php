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
				<li class="nav-item"><a href="bookappoinment.html" class="nav-link active ">Appoinments</a><ul class="ulnav">
					<!-- <li><a href="registeration.html">AS a Patient</a></li>
					<li><a href="registeration2.html">As a Doctor</a></li> -->
				</ul></li>
				<li class="nav-item"><a href="#" class="nav-link ">Paitents</a></li>
				<li class="nav-item"><a href="canselappoinment.php" class="nav-link">Doctors</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Doctors available</a></li>
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
<div class="container-fluid">
	<div class="container">
		<center><h3 class="animated bounceInLeft spancolor" style="animation-iteration-count:;animation-timing-function: 3">Edit details</h3></center>
		<table class="table  table-hover table-dark animated fadeIn" style="animation-delay: .5s; margin-top: 10px; color: #01CBC6;text-align: ;">
	<thead>
<?php

$conn =new mysqli("localhost:3306","root","","dasdatabase");

if(isset($_POST['submit']))
{
	$val=$_POST['data'];
     
	$sql="select * from appoinment_table where email='$val'";

	$result=$conn->query($sql);
   
	if($result)
	{
		while($row=$result->fetch_assoc())
		{

			?><form action="saveappoinment.php" method="post">
				<input type="hidden" name="id" value=<?php echo $row["id"];?>>
			 <tr>
			<td><label>patient name</label></td><td><input type="text" name="fname" value=<?php echo $row["fullname"]?>></td></tr><tr>
			<td><label>mobile</label></td><td><input type="text" name="mob" value="<?php echo $row["mob"]?>"></td></tr><tr>
			<td><label>Email</label></td><td><input type="text" name="email" value="<?php echo $row["email"]?>"></td></tr><tr>
			<td><label>booking date</label></td><td><input type="text" name="date" value="<?php echo $row["date"]?>"></td></tr>
			<tr>
			<td><label>booking time</label></td><td><input type="text" name="time" value="<?php echo $row["time"]?>"></td></tr>
			<tr>
			<td><label>Doctor_consult</label></td><td><input type="text" name="dname" value="<?php echo $row["doctor_consult"]?>"></td></tr><tr>
		</tr>
		<td colspan="2"><center><input type="submit" class="btn" name="edit" value="Edit"></form></center></td>

<?php
		}
	}
}

?>

</table>
</div></div>
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