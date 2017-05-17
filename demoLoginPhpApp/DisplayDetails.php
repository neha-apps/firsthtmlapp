<?php
session_start();
?>
<html>
	<body>
		<?php
		DEFINE('DB_USERNAME', 'root');
		DEFINE('DB_PASSWORD', 'root');
		DEFINE('DB_HOST', 'localhost');
		DEFINE('DB_DATABASE', 'mytestdb');

		$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		$last_user_id=$_SESSION["User_ID"];

		$qry= "select * from USER_DETAILS where USERID='$last_user_id'";
		$result = $mysqli->query($qry);
			    
			    while ($row = $result->fetch_row()) {
			       
			       $my_name= $row[1];
			       $my_age=$row[2];
				   $my_gender=$row[3];
			    }
		?>
		<div>
			Welcome <?php echo $my_name ; ?>  !!<br>
			My Age: <?php echo $my_age; ?><br>
			My Gender: <?php echo $my_gender; ?><br>
		</div>
	</body>
</html>
