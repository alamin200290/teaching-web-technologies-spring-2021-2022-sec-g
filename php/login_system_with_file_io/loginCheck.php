<?php 
session_start();

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if($username != null && $password != null){
		
		/*if(isset($_SESSION['user'])){
			$user = $_SESSION['user'];			
		}*/

		$file = fopen('user.txt', 'r');
		$user = fread($file, filesize('user.txt'));
		$abc = explode('|', $user);

		if(trim($abc[0]) == $username && trim($abc[1]) == $password){
			$_SESSION['status'] = "true";
			setcookie('status', 'true', time()+300, '/');
			header('location: home.php');
		}else{
			echo "invalid username/password";
		}
	}else{
		echo "null submission ....";
	}
}

?>