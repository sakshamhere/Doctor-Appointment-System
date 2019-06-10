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

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

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
 <!--  <h3 style="text-align: center;" class="h3">Search your doctor for 
  appoinments availible</h3> -->
  <br>
  <!-- <div class="col-sm-6 col-md-4">
    <select multiple id="company" class="form-control">
      <option>small</option>
      <option>medium</option>
      <option>large</option>
    </select> 
  </div>
</div> -->


     
 


<center>
 <div>

<table class="table">
   <tr><th>Availible from</th><th>To</th></tr>
       <?php
       if(isset($_POST["search"])) 
       {
        $name=$_POST["name"];
       $conn=new mysqli("localhost:3306","root","","dasdatabase");

       $sql="select * from appoinment_schedule where doctor_name='$name'";

       $result=$conn->query($sql);
       if($result)
       {
        while($row=$result->fetch_assoc())
        {
          ?>
          <tr>
           
           <td><?php echo $row["start_time"]; ?> AM</td><td><?php echo $row["end_time"]; ?> PM</td>

          </tr>
             
                
          <?php
        }
       }
     }
       ?> 
  </table>
  </div></center>



  <center>
 <div>
<center><span>Appoinments availible</span></center>
<table class="table">
   <tr class="tr">
       <?php
       if(isset($_POST["search"])) 
       {
        $name=$_POST["name"];
       $conn=new mysqli("localhost:3306","root","","dasdatabase");

       $sql="select * from time_slot where Doctor_name='$name'";

       $result=$conn->query($sql);
       if($result)
       {
        while($row=$result->fetch_assoc())
        {

          ?>

           
           <td class="td1" style="color: yellow"><?php echo $row["time1"]; ?></td>
           <td class="td2" style="color: yellow"><?php echo $row["time2"]; ?></td>
           <td class="td3" style="color: yellow"><?php echo $row["time3"]; ?></td>
           <td class="td4" style="color: yellow"><?php echo $row["time4"]; ?></td>
           <td class="td5" style="color: yellow"><?php echo $row["time5"]; ?></td>
           <td class="td6" style="color: yellow"><?php echo $row["time6"]; ?></td>
           <td class="td7" style="color: yellow"><?php echo $row["time7"]; ?></td>
           <td class="td8" style="color: yellow"><?php echo $row["time8"]; ?></td>
           <td class="td9" style="color: yellow"><?php echo $row["time9"]; ?></td>
           <td class="td10" style="color: yellow"><?php echo $row["time10"]; ?></td>
           <td class="td11" style="color: yellow"><?php echo $row["time11"]; ?></td>

        
             
                
          <?php
        }
       }
     }
       ?> 
       </tr>
  </table>
  </div>
</center>
<span style="color: yellow;float: left;margin-left: 50px;">Availible</span>
<span style="color: red;float: right;margin-right: 50px;">Booked</span>
  <center>
 <div>

<table class="table">
   <tr>
       <?php
       if(isset($_POST["search"])) 
       {
        $name=$_POST["name"];
       $conn=new mysqli("localhost:3306","root","","dasdatabase");

       $sql="select * from appoinment_table where doctor_consult='$name'";

       $result=$conn->query($sql);
       if($result)
       {
        while($row=$result->fetch_assoc())
        {
          ?>
          
           <script type="text/javascript">
             var time ="<?php echo $row["time"]; ?>";
             
             var a=document.querySelector('.tr');
            let c=a.children;
             
             for(var i=0;i<c.length;i++)
             {

                 var val=a.children[i].innerText;
                // var cn=a.children[i].className;
                 if(val==time)
                 {
                  a.children[i].style.color='red';
                // console.log(cn);
                 }
              

             }


//BY CONVERTING COLLECTION IN ARRAY AND LOOPING THROUGH FOREACH LOOP

              var ar=Array.from(c);
              console.log(ar);
             
             ar.forEach(function(element)
             {
              var val2=element.innerText;
              if(val2==time)
              {
            //    element.style.color="red";
              }
             });

           </script>
           

        
             
                
          <?php
        }
       }
     }
       ?> 
       </tr>
  </table>
  </div></center>
 
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
                  <input type="text" class="form-control" name="fname" id="name" >
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label class="control-label">Doctor's Name</label>
                  <input type="text" class="form-control" name="dname" id="name">
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label class="control-label">mob</label>
                  <input type="text" class="form-control" name="mob" id="mob">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                  <label class="control-label">Email</label>
                  <input type="text" class="form-control" name="email" id="mail">
               </div>
            </div>
            <div class='col-md-4'>
               <div class="form-group">
                  <label class="control-label">Appointment date</label>
                  <div  >
                     <input  name="date" id="datepicker"  />
                     
                     
                  </div>
               </div>
            </div>
            <div class='col-md-4'>
               <div class="form-group">
                  <label class="control-label">Appointment time</label>
                  <div  >
                     <input class="form-control" type="time" name="time">
                     
                     
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