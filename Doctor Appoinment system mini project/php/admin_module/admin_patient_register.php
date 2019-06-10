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

    <script type="text/javascript" src="../../js/form.js"></script>

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

<form action="../patient_module/patient_register_admin.php" method="post" enctype="multipart/form-data">
<div class="container-fluid">
	<div class="row padding">
	<div class=" col-lg-6 " style="background-color: #4C4B4B;color: #74B9FF;" >
        <center><table style="text-align: center;" cellpadding="10px;" >
		<tr><td colspan="2"><h2><span class="spancolor">Sign</span> Up</h2></td></tr>
        <tr>
		<td><label>Name</label></td>
		<td><input type="text" class="tableinput"  name="name"  id="name" placeholder="Name" required=""></td>
	</tr>
	<tr>
		<td><label>Mail id</label></td>
		<td><input class="tableinput" type="email"   name="mail" id="mail" placeholder="E-Mail"  required=""></td>
	</tr>
	<tr>
		<td><label>Mob</label></td>
		<td><input type="number" class="tableinput"  name="mob" id="mob" placeholder="Mobile no" required=""></td>
	</tr>
	<tr>
		<td><label>dob</label></td>
		<td><input type="date"  class="tableinput" name="dob" id="dob" placeholder="dd/mm/yy" required=""></td>
	</tr>
	<tr>
		<td><label>Address</label></td>
		<td><input type="textarea"  class="tableinput" name="address" id="address"  placeholder="address" required=""></td>
	</tr>
	<tr>
		<td><label>City</label></td>
		<td><input type="text"  class="tableinput" name="city" id="city" placeholder="city" required=""></td>
	</tr>
	<tr>
		<td><label>password</label></td>
		<td><input type="password" class="tableinput"  name="password"  id="password" placeholder="password" required=""></td>
	</tr>
	<tr>
		<td><label>confirm password</label></td>
		<td><input type="password"  class="tableinput" name="confirmpass" id="conpassword" placeholder="confirm" required=""></td>
	</tr>
	<tr>
		<td><label>upload profile photo</label></td>
		<td><input type="file"   id="fileupload" class="tableinput" name="fileupload"   required=""></td>
	</tr>
	<tr>
		
		<td colspan="2"><button class="btn btn-outline-secondary btn-lg button " type="submit" name="btn" value="save" onclick=" return validate()"><h4>Submit</h4></button></td>
	</tr>
	<tr>
		<td colspan="2"><p style="color: #fff;">By clicking <em>submit</em> you agree to our <a href="">terms and conditions</a></p></td>
	</tr>
</table></center>

	</div>
	<div class="col-lg-6"><h2 class="articleh2">There you go!</h2>
		<article><p>a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
			<hr class="light">
			<p>a ppackages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
		</article>
		<br><br><br>
		<h4 id="warning" class=" animated flash" style="color: #74B9FF; animation-iteration-count: infinite;animation-delay: 1s;"></h4></div>
		
</div>
</div>
</form>
<hr class="light">

<!--  feedback by cards! -->






















<!-- two column section -->


		<!-- <select class="form-control">
			<option>5-12</option>
			<option>12-20</option>
			<option>21-30</option>
			<option>31-45</option>
			<option>46-65</option>
			<option>Above 65</option> -->
		<!-- </select>
		<br>
		<hr class="light">
			<div>
			<label for="city">City</label>
			<select multiple class="form-control">
			<option>INDORE</option>
			<option>BHOPAL</option>
			<option>JABALPUR</option>
			<option>GWALIOR</option>
			<option>UJJAIN</option>
			<option>SAGAR</option>
			<option>DEWAS</option>
			<option>SATNA</option>
			<option>RATLAM</option>
			<option>REWA</option>
			<option>MURWARA</option>
			<option>KHANDWA</option>
			<option>BHIND</option>
			<option>CHINDWARA</option>
			<option>GUNA</option>
			<option>SHIVPURI</option>
			<option>VIDHISHA</option>
			<option>Above 65</option>
			<option>CHATRPUR</option>
			<option>MANDSAUR</option>
			<option>DAMOH</option>
			<option>KHARGONE</option>
			<option>NEEMUCH</option>
			<option>PREETUMPUR</option>	
			<option>HORSHANGABAD</option>
			<option>ITARSI</option>
			<option>SEHORE</option>
			<option>BETUL</option>
			<option>SEONI</option>
			<option>DATIA</option>
     		<option>NAGDA</option>
			<option>GADARWARA</option>
		</select> -->
	
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