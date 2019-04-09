<?php
session_start();
if(isset($_SESSION["email"])&&isset($_SESSION["password"]))
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

  <script type="text/javascript" src="../../js/form.js"></script>
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> 



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />








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
    h4
    {
    	animation-duration: 5s;
    	
    	animation-iteration-count:1;
    }
    .container
    {

    }
    .panel
    {
    	background-color: #333945;
    	color: #01CBC6;
    }
    .panel-heading
    {
    	
    }
   .s
   {
  
    border:none;
  outline: none;
  background-color: transparent;
  border-bottom: 1px solid #01CBC6;

   }
   .fa
{
  color: #01CBC6;

}
  .ul li
  {
    text-decoration: none;
    list-style: none;
    /*display: none;*/

  }
  .ul
  {
    background-color: #fff;
    width: 200px;
    border-bottom-right-radius:  5px;
    border-bottom-left-radius:  5px;
    color: black;
    background-color: #FBD28B;
  }
  .ul li:hover
  {
    background-color:#2C3335 ;
    color: #01CBC6;
  }
  .ul li
  {
    transition: .5s;
    margin: 10px;
    padding: 10px;
  }
</Style>

<nav class="navbar navbar-dark navbar-expand-sm bg-dark ">
	<a href="welcome.php" class="navbar-brand mr-auto ml-auto">Dashboard</a>
	<div class="container-fluid">
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navresponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navresponsive">
			<ul class="navbar-nav  ">
				<!-- <li class="nav-item active"><a href="index.html" class="nav-link ">Home</a></li> -->
				<li class="nav-item"><a href="bookappoinment.html" class="nav-link active ">Book appoinment</a><ul class="ulnav">
					<!-- <li><a href="registeration.html">AS a Patient</a></li>
					<li><a href="registeration2.html">As a Doctor</a></li> -->
				</ul></li>
				<li class="nav-item"><a href="myappoinment.php" class="nav-link">My appoinments</a></li>
				<li class="nav-item"><a href="canselappoinment.php" class="nav-link">Cansel Appoinment</a></li>
				<li class="nav-item"><a href="../admin_module/doctors_availible.php" class="nav-link">Doctors available</a></li>
			<!-- 	<li class="nav-item"><a href="#" class="nav-link">My profile</a></li> -->
				<li class="nav-item"><a href="destroy_session.php" class="nav-link"><span class="spancolor">log out</span></a></li>

			</ul>
		</div>
		
	</div>

</nav>


<div class="container-fluid" >
	<div class="container">
		<div class="panel clear"   >

     <div class="form-group">
  <h3 style="text-align: center;" class="h3">Search your doctor for 
  appoinments availible</h3>
  <br>
  <!-- <div class="col-sm-6 col-md-4">
    <select multiple id="company" class="form-control">
      <option>small</option>
      <option>medium</option>
      <option>large</option>
    </select> 
  </div>
</div> -->


     
 
       <?php
       if(isset($_POST["search"])) 
       {
       $conn=new mysqli("localhost:3306","root","","dasdatabase");

       $sql="select * from appoinment_table";

       $result=$conn->query($sql);
       if($result)
       {
        while($row=$result->fetch_assoc())
        {
          ?>
          
             
                
             

            
          
          
          <?php
        }
       }
     }
       ?> 


<center>
 <div>
<form method="post" action="bookappoinmentdetails.php">
    <a><i class="fa fa-search" aria-hidden="true"></i></a>
  <input type="text" placeholder=" Search.." class="s" name="name" onkeyup="filter()">
<input type="submit" class="btn" name="search" value="search">
</form>
  
  </div></center>


  <?php 
   
   $conn = new mysqli("localhost:3306","root","","dasdatabase");

   $sql ="select * from doctor_register";

   $result =$conn->query($sql);
   
   // if($result)
   // {
   //  echo "string";
   // }
   // else
   // {
   //  echo "not found";
   // }
   

  ?>
<h5></h5>

<div>
  <center>
  <ul class="ul">
    <?php
    while($row = $result->fetch_assoc())
    {
      ?>
    <li class="li" onclick="change(this)"><?php echo $row["name"]?></li>
    <?php
  }
  ?>
  </ul>
</center>
</div>




<div class="panel-heading" >

      </div>
      <br>
			<div class="panel-body">
				<div class="col-md-12">
				<table class="table">



					<!-- <tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr>
					<tr><td>10:00 AM - 12:00 PM </td><td>10:00 AM - 12:00 PM </td><td>10:00 AM - 12:00 PM </td><td>---------- </td><td>10:00 AM - 12:00 PM </td><td>10:00 AM - 12:00 PM </td><td>OFF </td></tr>

					<tr><td>2:00 PM - 6:00 PM </td><td>2:00 PM - 6:00 PM </td><td>2:00 PM - 6:00 PM </td><td>2:00 PM - 6:00 PM </td><td>2:00 PM - 6:00 PM </td><td>2:00 PM - 6:00 PM </td><td>OFF </td></tr>

					<tr><td>10:00 AM - 12:00PM </td><td>10:00 AM - 12:00PM </td><td>10:00 AM - 12:00PM </td><td>10:00 AM - 12:00PM </td><td>10:00 AM - 12:00PM </td><td>10:00 AM - 12:00PM </td><td>OFF </td></tr>
 -->

				</table>
			</div>
			</div>
		</div>
	</div>
	
</div>


                                                      <!--   time table -->
<h4 id="warning" class=" animated flash" style="color: #74B9FF; animation-iteration-count: infinite;animation-delay: 1s; text-align: center;"></h4></div>
<!-- 
                                                  appoinment schedule -->

<form action="payment.php" method="post">

<div class="container-fluid">


<div class="container">
  <div class="panel">
    <div class="panel-heading">Schedule an Appointment</div>
      <div class="panel-body">
         <div class="row">
          <div class="col-md-4">
               <div class="form-group">
                  <label class="control-label">your Full Name</label>
                  <input type="text" class="form-control" name="fname" id="name" disabled="">
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label class="control-label">Doctor's Name</label>
                  <input type="text" class="form-control" name="dname" id="name" disabled="">
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label class="control-label">mob</label>
                  <input type="text" class="form-control" name="mob" id="mob" disabled="">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                  <label class="control-label">Email</label>
                  <input type="text" class="form-control" name="email" id="mail" disabled="">
               </div>
            </div>
            <div class='col-md-4'>
               <div class="form-group">
                  <label class="control-label">Appointment date</label>
                  <div  >
                     <input  name="date" id="datepicker" disabled="" />
                     
                     
                  </div>
               </div>
            </div>
            <div class='col-md-4'>
               <div class="form-group">
                  <label class="control-label">Appointment time</label>
                  <div  >
                     <input class="form-control" type="time" name="time" disabled="">
                     
                     
                  </div>
               </div>
            </div>
        </div>
        <input type="submit" name="book" class="btn btn-primary" value="Submit" onclick=" return validate()">
      </div>
   </div>
</div>

</div></form>
<script>
   $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });




$('#input_starttime').pickatime({
// 12 or 24 hour
twelvehour: true,
});
</script>

</div>
<!-- <script type="text/javascript" src="script.js"></script> -->

</body>

<script type="text/javascript" src="script.js"></script>
</html>


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