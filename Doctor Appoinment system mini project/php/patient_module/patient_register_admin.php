<?php
session_start();
$name= $_SESSION["username"];
if(isset($_SESSION["username"]))
{
?>





<?php
print_r($_FILES);
if(isset($_FILES['fileupload']['tmp_name']))
{
	echo "string";

}
$name=$_POST["name"];
$mail=$_POST["mail"];
$mob=$_POST["mob"];
$dob=$_POST["dob"];
$address=$_POST["address"];
$city=$_POST["city"];
$password1=$_POST["password"];
$confirmpass=$_POST["confirmpass"];
$servername="localhost:3306";
$username="root";
$password="";
$dbname="dasdatabase";


$conn= new mysqli($servername,$username,$password,$dbname);

if($conn==TRUE)
{
	echo "connected";
}
else
{
	echo "not connected";
}


$target_dir='uploadspatient/';
$target_file=$target_dir . basename($_FILES["fileupload"]['name']);
$uploadok=1;

$imagefiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (isset($_POST['btn'])) {
	$check=getimagesize($_FILES['fileupload']['tmp_name']);
	if($check!==false)
	{
		$uploadok=0;
	}
	# code...
}


	if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$target_file))
	{
		echo "uploaded";
	}
	else
	{
		echo "not";
	}




$sql="insert into patient_regtable(name,email,mob,dob,address,city,password,confirmpass,upload) values ('".$name."','".$mail."','".$mob."','".$dob."','".$address."','".$city."','".$password1."','".$confirmpass."','".$target_file."')";
$result=$conn->query($sql);

if($result)
{
	session_start();
	$_SESSION["name"]=$name;
	$_SESSION["password"]=$password1;
	header('location:admin_patient_show.php');
}

else
{
	echo "error".$conn->error;
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
      window.location.href="../../static/admin.html";
     }
</script>
<?php
}
?>