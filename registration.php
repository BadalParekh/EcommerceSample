<html>
<head>
</head>
<body><form method="post" action"registrationForm.php">

<div><?= $_SESSIONS['message'] ?></div>
<h1> Create an Account </h1>
<input type="text" placeholder="Username" name="username" required /> <br /> <br />
<input type="password" placeholder="Password" name="password" required /> <br /> <br />
<input type="password" placeholder="Confirm Password" name="password1" required /> <br /> <br />
<input type="submit" name="register" value="Register"/> 

</form>
</body>
</html>