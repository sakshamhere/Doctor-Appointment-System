<?php

    

if(isset($_POST['records']))
{
   $conn= new mysqli("localhost:3306","root","","dasdatabase");
 echo "string";
 //if id array is not empty
  if(!empty($_POST['record']))
  {

    //get all id and convert into a string

    // $idstr = implode(', ', $_POST["records"]);

    //  echo "$idstr";
    $records=$_POST['record'];
    
  
   // $sql = "DELETE from appoinment_table where id IN('$idstr')";
    $result=$conn->query("DELETE from appoinment_table where id ='$records'");
    
    echo $result;
     if($result)
     {
      header('location:admin_appoinment_show.php');
     }
  }
}
?>

<?php

if(isset($_POST['delete']))
{
  $conn= new mysqli("localhost:3306","root","","dasdatabase");


    if(!empty($_POST['doctor_name']))
  {

 
    $records=$_POST['record'];
    
  

    $result=$conn->query("DELETE from appoinment_table where id ='$records'");
    
    echo $result;
     if($result)
     {
      header('location:admin_appoinment_show.php');
     }
  }
}
?>












