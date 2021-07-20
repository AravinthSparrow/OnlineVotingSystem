<?php
$dbs="project";
$mysqli = new mysqli("localhost:3307","root","",$dbs);

 if ($mysqli -> connect_errno) 
{   
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;   exit(); 
}
else 
{
// echo $dbs."dbconnected";

 $stname1 = $_POST['image'];
$sql = "INSERT INTO camera (image)VALUES ('$stname1')";

if ($mysqli->query($sql) === TRUE) {
	// echo"<p> <font color=red font face='arial' size='100%' align='center'>Thank You For Registering</font> </p>"; 
	// header('Location: http://127.0.0.1/message.php');
   
  $t1 = $_POST['voterid'];
  $t2 = $_POST['mobno'];
  // echo$t2;
	$curl = curl_init();
    curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk?authorization=fvAymVMcp5uT7LJICNaGe2jBbW0dPnYlEOrg3Q6z1HUFist4KwrU3LuyWdZ8ma4A7QKMYPlHtXsiERne&sender_id=ARAVINTH&message=".urlencode('ONLINE VOTING SYSTEM:Thank You For Registering.Your VoterID is'.$t1 )."&language=english&route=p&numbers=".urlencode($t2),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo "OTP has been sent";
  header('Location: http://127.0.0.1/regack.php');
}

	 
} else {
  echo"Registration Failed";
   
   echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}

$mysqli->close();
?>
<!-- 	 $newvar = $_GET['mobno'];
	 $voter= $_GET['voterid'];
	 $sql = "SELECT * FROM registration where voterid!=''";
    $result = mysqli_query($mysqli, $sql);
     	while($row = mysqli_fetch_array($result)){
    		$temp=$row['voterid']:}
 -->