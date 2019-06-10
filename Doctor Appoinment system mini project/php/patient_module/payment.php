

<?php 
session_start();
$name=$_SESSION["name"];
// echo $name;

?>

<?php

if(isset($_SESSION["email"])&&isset($_SESSION["password"]))
{
 


?> 



<!DOCTYPE html>
<html>
<head>
	<title>my appoinments</title>
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

   <script type="text/javascript" src="../../js/form.js"></script>

</head>
<body>

<style type="text/css">
	body
    {
	background-color: #4C4B4B;
    }
    .payment li
    {
      list-style: none;
    }
    .payment li div
    {
      padding: 10px;
    }
    .payment li label
    {
      font-family: bold;
    }
    .payment td
    {
    	text-align: left;
    }
    .details-card
    {
    	display: none;
    	background-color: #2C3335;
    	color: #01CBC6;
    	border-radius: 10px;
    	transition: .5s;
    }
</style>

<script type="text/javascript">
function display_card_details1()
{
	document.getElementById('card1').style.display='block';
	document.getElementById('card3').style.display='none';
	document.getElementById('card2').style.display='none';

}
function display_card_details2()
{
	document.getElementById('card2').style.display='block';
	document.getElementById('card1').style.display='none';
	document.getElementById('card3').style.display='none';

}
function display_card_details3()
{
	document.getElementById('card3').style.display='block';
	document.getElementById('card1').style.display='none';
	document.getElementById('card2').style.display='none';
    document.getElementById('c3').checked=true;
}

</script>





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
				<li class="nav-item"><a href="doctors_availible.php" class="nav-link">doctor's available</a></li>
				<li class="nav-item"><a href="destroy_session.php" class="nav-link"><span class="spancolor">log out</span></a></li>

			</ul>
		</div>
		
	</div>

</nav>
<?php
if(isset($_POST["book"]))
{

   // $originalDate = "2010-03-21";
$newDate = date("Y-m-d", strtotime($_POST["date"]));
// echo $_POST["date"];
// echo $newDate;
	$_SESSION["fname"]=$_POST["fname"];
	$_SESSION["mob"]=$_POST["mob"];
	$_SESSION["tmail"]=$_POST["email"];
	$_SESSION["date"]=$newDate;
	$_SESSION["dname"]=$_POST["dname"];
  $_SESSION["time"]=$_POST["time"];
    $name=$_POST["dname"]



?>


<br>
<center><h3 class="animated bounceInLeft spancolor" style="animation-iteration-count:;animation-timing-function: 3">you are almost done...</h3></center>
<hr class="light">
<center ><h4 class="" style="color: #EA7773;">Select a payment method</h4></center>
  <div style="width: px; margin-right: 150px; margin-left: 150px;">
  	<form action="saveappoinment.php" method="post">
  	<div class=" card payment">
  		<ul>
  			<li>
  		<div class="card" onclick='display_card_details1()' style="transition: .5s;">
  			<table><tr>
  		<td><input type="radio" name="rd" ></td><td><label>Credit card/Debit card</label></td>
  	</tr></table>
     
         <div class="details-card" id="card1">
         	<span>We’ll save this card for your convenience, you can remove it by visiting Your Account section.</span>
         	<table>
         		<tr><th>Name on card</th><th>Card Number</th><th>Expiry date</th></tr>
         		<tr><td><input type="" name=""></td><td><input type="" name=""></td>
         			<td><input type="date" name="" id="c3"></td><td><span><button class="btn btn-primary">Add your card</button></span></td>
         		</tr>
         	</table>
         </div>
         

  		</div>
  	</li>



  





  	<li>
  		<div class="card" onclick='display_card_details2()'>
  			<table><tr>
  		<td><input type="radio" name="rd"></td><td><label>Net Banking</label></td>
  	</tr></table>
  	<div class="details-card" id="card2">
  		<select name="choose an option" >
  			<option selected>Choose an option</option>
  			<option></option>

  		</select>

  	</div>
  		</div>
  	</li>







  	<li>
  		<div class="card" onclick='display_card_details3()'>
  			<table><tr>
  		<td><input type="radio" name="rd" id="c3"></td><td><label>BHIM UPI</label></td>
  	</tr></table>
  	<div class="details-card" id="card3">
  		<span>Please enter existing BHIM UPI ID</span>
  	    <table>
  	    	<tr><td><input type="" name=""></td><td><button class="btn btn-primary">verify</button></td></tr>
  	    </table>
  	</div>
  		</div>
  	</li>






  	</ul>
  	
  	</div>
  	<center><input type="submit" name="book" value="Proceed" class="btn-primary btn"></center>
  </form>
  </div>
  <br>
  <hr class="light">
    
<?php
$conn =new mysqli("localhost:3306","root","","dasdatabase");

$sql="select fees from payment_schedule where doctor_name='$name'";

$result=$conn->query($sql);

$row=$result->fetch_assoc();
$fee=$row["fees"];

?>

    <div style="margin:auto;font-weight: 10;font-size: 20px;">
    	<div class="card">
    		<table style="text-align: center;"><tr>
    		<td><label>Doctor preferred :</label></td>
    			<td><span>Dr.<?php echo $_POST["dname"]; ?></span></td></tr>

    			<tr>
    		<td><label>Fee :</label></td>
    			<td><span>Rs <?php echo $fee ?> /-</span></td></tr>
    		</table>
    	</div>
    </div>
</body>
</html>
<?php
}
?>

<?php
}
else
{
?>
<script>
     if(confirm("please login to proceed"))
     {
     	window.location.href="patient_login.php";
     }
</script>
<?php
}
?>