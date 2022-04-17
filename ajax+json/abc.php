<?php 
	$data = $_POST['data'];
	$json = json_decode($data);

	print($json->name);

	//echo "Your username is: ".$_POST['uname'];
	$student = ['id'=>12, 'name'=>'alamin', 'email'=>'alamin@aiub.edu'];

	/*$json ="{
		'id':12,
		'name':'alamin',
		'email':'alamin@aiub.edu'
	}"*/

	//echo json_encode($student);
?>