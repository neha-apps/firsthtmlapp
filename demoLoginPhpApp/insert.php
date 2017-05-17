<?php 
session_start();
$myname=$_POST["myname"];
$age= $_POST["age"];
$gender=$_POST["gender"];

DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'mytestdb');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_error()) {
	die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
	}
    
$qry="INSERT INTO USER_DETAILS (MY_NAME,MY_AGE,SEX) VALUES('$myname','$age','$gender')";
$connect = $mysqli->query($qry);
$last_id=$mysqli->insert_id;
$mysqli->close();
$_SESSION["User_ID"] =$last_id;
header("location: DisplayDetails.php");
?>

