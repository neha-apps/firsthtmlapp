<!DOCTYPE html>
<html>
<head>
<script>

function validateForm() {
    var x = document.forms["loginForm"]["username"].value;
    var y = document.forms["loginForm"]["password"].value;
    if (x == "" || y=="") {
        alert("User Name and Password cannot be empty!!");
        return false;
    }
}
</script>
</head>
	<body>
		<form action="input.php" name="loginForm" method="post" onsubmit="return validateForm()">
			<table>
				<tr>
					<td colspan="2" align="center"> My Dummy Application</td></tr>
				<tr>
					<td>Username: </td> <td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password: </td> <td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="login"></td>
				</tr>
			</table>
			</form>		
	</body>
</html>



