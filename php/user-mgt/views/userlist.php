<?php 
	require('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Userlist</title>
</head>
<body>

	<a href="home.php"> Back</a> |
	<a href="../controllers/logout.php"> logout</a>

	<br><br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Alamin</td>
			<td>123</td>
			<td>alamin@aiub.edu</td>
			<td>
				<a href="edit.php?id=1"> EDIT </a> |
				<a href="delete.php"> DELETE </a>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Alamin</td>
			<td>567</td>
			<td>xyz@aiub.edu</td>
			<td>
				<a href="edit.php?id=2"> EDIT </a> |
				<a href="delete.php"> DELETE </a>
			</td>
		</tr>
		<tr>
			<td>3</td>
			<td>XYZ</td>
			<td>234</td>
			<td>xyz@aiub.edu</td>
			<td>
				<a href="edit.php?id=3"> EDIT </a> |
				<a href="delete.php"> DELETE </a>
			</td>
		</tr>
	</table>
</body>
</html>