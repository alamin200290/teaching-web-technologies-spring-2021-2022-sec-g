<?php 
session_start();

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if($username != null && $password != null){
		
		/*if(isset($_SESSION['user'])){
			$user = $_SESSION['user'];			
		}*/

		$file = fopen('../models/user.txt', 'r');

		while (!feof($file)) {
			$user = fgets($file);
			$abc = explode('|', $user);

			if(trim($abc[1]) == $username && trim($abc[2]) == $password){
				$_SESSION['status'] = "true";
				setcookie('status', 'true', time()+300, '/');
				header('location: ../views/home.php');
			}
		}
		
		echo "Invalid username/password";

	}else{
		echo "null submission ....";
	}
}

?>