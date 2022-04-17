
//var name = "alamin";
//name = "alamin";
//let name = "alamin";
//const name = "alamin";

let students = ['alamin', 11, 'alamin@aiub.edu']
//students[0]

/*if(){

}else{

}*/

/*for (let i = 1; i >= 0; i--) {
	
}*/

//console.log('test');
//alert('test');
//document.write('test');

function f1(name){
	document.getElementsByTagName('h1')[0].innerHTML = name;			
}

function f2(){
	let name = document.getElementById('name').value;
	f1(name);
}

function myname(){
	let name = document.getElementById('name').value;

	if(name == ""){
		document.getElementById('d1').innerHTML = "null value..try again";
	}else{
		document.getElementById('d1').innerHTML = "";			}
}

function move(){
	let current = document.getElementById('d1').style.left;

	if(current == ""){
		document.getElementById('d1').style.left = "10px";
		setTimeout(move, 500);
	}else{
		//alert('test');

		let num = parseInt(current.replace('px', ''));
		num += 10;
		//alert(num);
		document.getElementById('d1').style.left = num+'px';
		setTimeout(move, 500);
	}
}


function ajax(){

	let username = document.getElementById('name').value;

	let json = {
		'id':12,
		'name': username,
		'email': 'alamin@aiub.edu'
	};

	let data = JSON.stringify(json);

	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', 'abc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+data);

	xhttp.onreadystatechange = function (){

		if(this.readyState == 4 && this.status == 200){
			//let student = JSON.parse(this.responseText);
			//alert(student.name);
			//console.log(student.email);
			alert(this.responseText);
			//document.getElementById('h1').innerHTML = this.responseText;
		}
	}
}