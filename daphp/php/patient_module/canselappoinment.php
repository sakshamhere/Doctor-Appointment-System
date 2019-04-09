<?php
session_start();
$name=$_SESSION["name"];

?>
<?php

if(isset($_SESSION["email"])&&isset($_SESSION["password"]))
{
 


?>







<!DOCTYPE html>
<html>
<head>
	<title>cancel appoinment</title>
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
</style>
.
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
<?php 
    $conn= new mysqli("localhost:3306","root","","dasdatabase");

    $sql="SELECT * from appoinment_table where fullname='$name'";

    $result=$conn->query($sql);
?>
<br>
<center><h3 class="animated bounceInLeft spancolor" style="animation-iteration-count:;animation-timing-function: 3">Cancel Appoinments</h3></center>

<form action="delete.php" method="post" onsubmit="return delete_confirm()">

<script type="text/javascript">
	



function delete_confirm()
{
	if(document.getElementById('check').checked=true)
	{
		var result =confirm("are you sure ,you wanna delete");
		if(result)
		{
				return true;
			
			
		
        }
        else
        {
        	return false;
        }
	}
	else
	{
		 alert('Select at least 1 record to delete.');
		 return false;
	}
}


// jquery
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
	
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});

// jquery

function click()
{
	if(document.querySelector('#check').checked)
	{
		alert("checked");
	}
	else
	{
		alert("not");
	}
}

</script>
<div class="container-fluid">
	<div class="container">
		<table class="table table-striped table-bordered table-hover table-dark animated fadeIn" style="animation-delay: .5s">
			<thead>
				<tr><th><input type="checkbox" name="" id="select_all"></th><th>Sno</th><th>Name</th><th>Mobile</th><th>email</th><th>appoinment time</th><th>time</th><th>doctor</th><th>Booked on</th></tr>
			</thead>
			<tbody>
<?php

if($result)
{
	$sr=1;
	while($row=$result->fetch_assoc())
	{
		
?>
				<tr>
					<td><input type="checkbox" name="records[]" class="checkbox" id="check" value="<?php echo $row["id"];?>"></td>
					<td><?php echo $sr++;?></td>
					<td><?php echo $row["fullname"]?></td>
			        <td><?php echo $row["mob"]?></td>
			        <td><?php echo $row["email"]?></td>
			        <td><?php echo $row["date"]?></td>
			        <td><?php echo $row["time"]?></td>
			        <td><?php echo $row["doctor_consult"]?></td>
			        <td><?php echo $row["bookedon"]?></td>
				</tr>
			</tbody>
			<?php 
           
    }
}
?>
		</table>
		
	</div>
</div>

</body>
</html>
	
<center><input class="btn btn-sm btn-secondry animated fadeIn" type="submit" name="delete" value="Delete" style="animation-delay: 1s;padding: 10px;font-size: 20px; border-radius: 05px;" onclick="delete_confirm()"></center>
</form>




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
