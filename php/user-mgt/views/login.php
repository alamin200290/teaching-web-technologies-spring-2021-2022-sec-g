<?php 

	$error = "";

	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "Invaild username/password";
		}
	}
?>

<html>
<head>
	<title>login</title>

	<style type="text/css">
		body{
			background: yellow;
		}

		h1{
			color: green;
		}

		#another{
			color: red;
		}

		#d1{
			background: red;
			width: 100px;
			height: 100px;
			border-radius: 50px;

		}
	</style>
</head>

<body>

	<h1 id='first'>Login Page</h1>
	<h1 id='another'>Login Page2</h1>

	<div id="d1">
		test
	</div>


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
					<a href="reg.php"> Signup </a>
					<br>
					<br>
					<?=$error?>

				</td>
			</tr>
		</table>
	</form>
</body>
</html>