<?php
$conn= new  mysqli("127.0.0.1:3307","root","","student") or die("Unable to Connect");
if ($conn)
	echo "connected successfully";

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername= "root";
$dbpassword= "";
$dbname = "student";

//Create Connection
$conn= new  mysqli($host,$dbusername,$dbpassword,$dbname);

if (mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno().') '
	.mysqli_connect_error());
}
else { 
	$sql = "INSERT INTO classreps (username, password)
	values ('$username', '$password')";
	if ($sonn->query($sql)){
		echo "New record is inserted successfully";
	}
	else {
		echo "Error: ".$sql."<br>".$conn->error;
	}
	$conn->close();
}	
}
}

else{
	echo "Password should not be empty";
	die();
}
else{
	echo "Username should not be empty";
	die();
}

?>