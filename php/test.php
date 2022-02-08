<?php

	//print("Hello from PHP");

	/*$name = "alamin";
	$id = 123;
	$cgpa = 4.00;
	$email = "alamin@aiub.edu";*/

/*	$student = array(1, 'alamin', 3.4, 'alamin@aiub.eu');
	echo $student[1];*/

	/*$student = [1, 'alamin', 3.4, 'alamin@aiub.edu'];
	echo $student[3];*/

	/*$students = [
					[1, 'alamin', 3.4, 'alamin@aiub.edu'],
					[2, 'abc', 3.5, 'abc@aiub.edu'],
					[3, 'xyz', 3.6, 'xyz@aiub.edu']
				];

	echo $students[2][3];*/

/*	$student = ['id'=>1, 'name'=>'alamin', 'cgpa'=>3.4, 'email'=>'alamin@aiub.edu'];
	echo $student['email'];*/

	/*$students = [
					['id'=>1, 'name'=>'alamin', 'cgpa'=>3.4, 'email'=>'alamin@aiub.edu'],
					['id'=>2, 'name'=>'abc', 'cgpa'=>3.5, 'email'=>'xyz@aiub.edu'],
					['id'=>3, 'name'=>'xyz', 'cgpa'=>3.6, 'email'=>'abc@aiub.edu']
				];*/

	$students = [
					's1'=> ['id'=>1, 'name'=>'alamin', 'cgpa'=>3.4, 'email'=>'alamin@aiub.edu'],
					's2'=>['id'=>2, 'name'=>'abc', 'cgpa'=>3.5, 'email'=>'xyz@aiub.edu'],
					's3'=>['id'=>3, 'name'=>'xyz', 'cgpa'=>3.6, 'email'=>'abc@aiub.edu']
				];

	//echo $students['s1']['name'];

	/*function sum($num1, $num2){

		echo $num1+$num2;
	}

	sum(5,7);*/

	/*if(7 === '7'){
		echo "true";
	}else{
		echo "false";
	}*/


	/*for ($i=0; $i < ; $i++) { 
	
	}*/

	foreach ($students as $s) {
		echo "<h1>".$s['email']."|".$s['name']."</h1>";
	}
?>