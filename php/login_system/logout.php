<?php 
	
	session_start();
	unset($_SESSION['status']);
	setcookie('status', 'true', time()-300, '/');
	header('location: login.php');

?>