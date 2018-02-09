<?php
session_start();

	if(isset($_SESSION['CurrentUser'])){
		if ($_SESSION['loggedIn'] == true){
			echo 'Already Logged In';
		}
		else{
		echo "Welcome " . $_SESSION['CurrentUser'];
		}
	}
	else {
	echo "Invalid Username or Password";
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
<br/> <br/>
<a href="menu.php">  <button>Go Home </button>  </a>

</form>
</body>
</html>
