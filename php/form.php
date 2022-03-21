<?php 

$uerror = "";
$username = "";

if(isset($_REQUEST['submit'])){
		
	if($_REQUEST['username'] == null){
		$uerror =  "invalid username!";
	}else{
		$username = $_REQUEST['username'];
	}
}

?>

<html>
<head>
	<title>login</title>
</head>
<body>
	<form method="POST" action="#">
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" value="<?=$username?>">
				</td>
				<td>
					<?=$uerror?>
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