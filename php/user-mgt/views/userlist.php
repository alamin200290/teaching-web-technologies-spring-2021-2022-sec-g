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

		<?php 

			$file = fopen('../models/user.txt', 'r');

			while(!feof($file)){ 
				$user = fgets($file);
				$userArray = explode("|", $user);
		?>
		<tr>
			<td><?=$userArray[0]?></td>
			<td><?=$userArray[1]?></td>
			<td><?=$userArray[2]?></td>
			<td><?=$userArray[3]?></td>
			<td>
				<a href="edit.php?id=<?=$userArray[0]?>"> EDIT </a> |
				<a href="delete.php?id=<?=$userArray[0]?>"> DELETE </a>
			</td>
		</tr>

		<?php 
			}
		?>
		
	</table>
</body>
</html>