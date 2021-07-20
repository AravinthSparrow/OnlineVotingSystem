<?php
$dbs="project";
$mysqli = new mysqli("localhost:3307","root","",$dbs);

// Check connection 
if ($mysqli -> connect_errno) 
{   
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;   exit(); 
}
else 
{
// echo $dbs."dbconnected";

$stname1 = $_POST['firstname'];
$stname2 = $_POST['lastname'];
$stname3 = $_POST['voterid'];
$stname4 = $_POST['gender'];
$stname5 = $_POST['dob'];
$stname6 = $_POST['mobno'];
// $stname7 = $_POST['image'];
//verify Email ID
//End Email ID verify
$sql = "INSERT INTO registration (firstname,lastname,voterid,gender,dob,mobno)VALUES ('$stname1','$stname2','$stname3','$stname4','$stname5','$stname6')";

if ($mysqli->query($sql) === TRUE) {
	echo"Record Inserted"; 
   header('Location: http://127.0.0.1/camera.php?voterid='.$stname3);
	 
} else {
  echo"Registration Failed";
   
   echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}

$mysqli->close();
?>

