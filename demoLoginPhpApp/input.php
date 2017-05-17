<?php
session_start();

 // get values from form in login.php
$username = $_POST['username'];
$password = $_POST['password'];

$error=''; // Variable To Store Error Message

//if (empty($_POST['username']) || empty($_POST['password'])) {
	//$_SESSION["invalid_flag"]= 1;
	
//	header("location: login.php");	
//}

//else
//{
DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'mytestdb');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
 }
//echo 'Connected successfully.';
  	
$qry="SELECT * FROM LOGIN_DETAILS WHERE username='$username' AND password='$password'";
$connect = $mysqli->query($qry);
$count=0;
if ($result = $mysqli->query($qry)) {
/* fetch object array */
	while ($row = $result->fetch_row()) {
	    $count= mysqli_num_rows($result);
	   // printf ("%s (%s) (%s)\n", $row[0], $row[1], $row[2]);
	}
}


if($count==1) {
	$_SESSION['login_user'] = $username;
	$_SESSION["invalid_flag"]= 0;
	header("location: InsertDetail.php");
}	
		//else
		//echo "User and Password not found. \n";	
		//}
else {
	$_SESSION["invalid_flag"]= 1;
header("location: login.php");	
}
//}
?>


 