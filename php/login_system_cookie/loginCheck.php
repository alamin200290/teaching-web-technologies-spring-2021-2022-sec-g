<?php 
session_start();

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if($username != null && $password != null){
		
		if(isset($_SESSION['user'])){
			$user = $_SESSION['user'];			
		}

		if($user['username'] == $username && $user['password'] == $password){
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