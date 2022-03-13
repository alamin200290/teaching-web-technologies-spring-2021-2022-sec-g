<?php 

	$con = mysqli_connect('localhost', 'root', '', 'webtech');

	/*if($con){
		echo "connection done!";
	}else{
		echo "error";
	}*/

	//$sql = "select * from users";
	$sql = "update users set username='abc' where id=8";

	if(mysqli_query($con, $sql)){
		echo "done!";
	}else{
		echo "not done!";
	}
	//$result = mysqli_query($con, $sql);
	/*$row = mysqli_fetch_assoc($result);
	$row1 = mysqli_fetch_assoc($result);

	print_r($row);
	print_r($row1);*/

	/*while ($row = mysqli_fetch_assoc($result)) {
		print_r($row);
		echo "<br>";
	}*/
	
?>