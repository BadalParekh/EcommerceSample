<?php
	session_start();
	
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
<form method="post" action"login.php">
Username: <input type="text" name="username" required /> <br /> <br />
Password: <input type="password" name="password"  required /> <br /> <br />
<input type="submit" name="submit" value="Log In" /> 
</form>


</body>
</html>

<?php
$user = 'root';
$pass = '';
$db = 'cart';
$host = "localhost";
$done = FALSE;
mysql_connect($host, $user, $pass);
mysql_select_db($db);

if(isset($_SESSION['CurrentUser'])){
	header("Location: welcomeScreen.php");
		$_SESSION['loggedIn'] = true;
			exit;

	
}
else{
	if(isset($_POST['username'])){
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM login WHERE username='".$username."' AND password='".$password."' LIMIT 1";
		$res = mysql_query($sql);
		if (mysql_num_rows($res) == 1){
			$_SESSION['CurrentUser'] = $username;
			$_SESSION['loggedIn'] = false;
			echo"Welcome, " . $username;
			$done = TRUE;
		}
		else{
			echo"Invalid login Information";
			$done = FALSE;
		}
	
	}
}
if ($done){
		$_SESSION['alreadyLoggedIn'] = TRUE;
			header("Location: welcomeScreen.php");
			exit;
		 }
 
?>