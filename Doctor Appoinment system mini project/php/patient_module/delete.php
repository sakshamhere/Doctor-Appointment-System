<?php

     $conn= new mysqli("localhost:3306","root","","dasdatabase");

if(isset($_POST['delete']))
{
 echo "string";
 //if id array is not empty
  if(!empty($_POST['records']))
  {

    //get all id and convert into a string

    // $idstr = implode(', ', $_POST["records"]);

    //  echo "$idstr";
    $records=$_POST['records'];
     for($i=0;$i<count($records);$i++)
    {
      $id=$records[$i];
   // $sql = "DELETE from appoinment_table where id IN('$idstr')";
    $result=$conn->query("DELETE from appoinment_table where id ='$id'");
    }
    echo $result;
     if($result)
     {
      header('location:canselappoinment.php');
     }
  }
  else
{
  header('location:canselappoinment.php');
}
  



}
else
{
  header('location:canselappoinment.php');
}
















// 	$noofcheckbox=count($_POST["records"]);
//     echo $noofcheckbox;
//      $i=0;
//      while($i<$noofcheckbox)
//      {
//       $delete = $_POST['records'][$i];
//       $sql = "delete from doctor_appoinment where id ='$delete'";
//       $result=$conn->query($sql);
//       $i++;
//      }  

//     if($result)
//     {
//     	header("location:canselappoinment.php");
//     }
     

// if(isset($_POST['save'])){
  
//   $checkbox = $_POST['check'];

//   for($i=0;$i<count($checkbox);$i++)
//   {

//   $del_id = $checkbox[$i]; 

//   mysqli_query($conn,"delete from employee where id='".$del_id."'");
//   $message = "Data deleted successfully !";
  
//   }
 




// }

?>