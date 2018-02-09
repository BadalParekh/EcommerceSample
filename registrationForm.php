<?php

$user = 'root';
$pass = '';
$db = 'cart';
$host = "localhost";




$mysqli = new mysqli($host, $user, $pass, $db);

if($_SERVER['REQUEST_METHOD'] =='POST') {
	if($_POST['password'] == $_POST['password1']){
		$username = $mysqli->real_escape_string($_POST['username']);
		$password = $mysqli->real_escape_string($_POST['password']);
		$_SESSIONS['username'] = $username;
		
		
		$sql = "INSERT INTO login (username, password)"." VALUES('$username', '$password')";
		
		if($mysqli->query($sql) == true){
			echo "Registration succesful!";
			
		}
		else{
			echo"User could not be added to the database!";
		}
		
	}
	else{
		echo"Password did not match!";
	}
}




?>

<html>
<head>

	<meta charset="UTF-8">
	<title>Vintage Clothing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="script.js"></script>
</head>

<body onload="startTimer()">
<form method="post" action"registrationForm.php">


<h1> Create an Account </h1>
<input type="text" placeholder="Username" name="username" required /> <br /> <br />
<input type="password" placeholder="Password" name="password" required /> <br /> <br />
<input type="password" placeholder="Confirm Password" name="password1" required /> <br /> <br />
<input type="submit" name="register" value="Register"/> 

</form>
</body>
</html>
