<?php 
	//session_start();
	//print_r($_SESSION);
?>

<html>
<head>
	<title>login</title>
</head>
<body>
	<form method="POST" action="../controllers/loginCheck.php">
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" value="">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" value="">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>