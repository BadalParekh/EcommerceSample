<!DOCTYPE html>
<?php
	session_start();
	$_SESSION['loggedIn'] = false;
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
	<div id="wrapper">
	
	
		<div id="logo_searchBar">
		<div class="content">
			<figure>
			<a href="menu.php">
			<img src="Photos/logo.png" id="logo" />
			</a>
			</figure>
			
		</div>
		</div>
		
		
		<div id="navBar">
		<div class="content">
				<div class="container">
			
					<div class="dropdown">
						<button onclick="drop0()" class="drop">Today's Deals</button>
						<div class="dropdown-content" id="myDropdown0">
						<a href="#"> Clearance </a>
						<a href="#"> On Sale </a>
						<a href="#"> Featured </a>
						</div>
					</div>
					<div class="dropdown">
						<button onclick="drop1()" class="drop">Men</button>
						<div class="dropdown-content" id="myDropdown1">
						<a href="men-tees.php"> Graphic Tees </a>
						<a href="men-polos.php"> Polos </a>
						<a href="men-jeans.php"> Jeans </a>
						<a href="men-shorts.php"> Shorts </a>
						</div>
					</div>
					<div class="dropdown">
						<button onclick="drop2()" class="drop">Women</button>
						<div class="dropdown-content" id="myDropdown2">
						<a href="women-tshirts.php"> T-shirts </a>
						<a href="women-shirts.php"> Shirts </a>
						<a href="women-jeans.php"> Jeans </a>
						<a href="women-dresses.php"> Dresses </a>
						</div>
					</div>
					<div class="dropdown">
						<button onclick="drop3()" class="drop">Juniors</button>
						<div class="dropdown-content" id="myDropdown3">
						<a href="#"> Shirts </a>
						<a href="#"> Jeans </a>
						<a href="#"> Dresses </a>
						<a href="#"> Shorts </a>
						<a href="#"> Graphic Tees </a>
						<a href="#"> Polos </a>
						</div>
					</div>
					<div class="dropdown">
						<button onclick="drop4()" class="drop">Shoes</button>
						<div class="dropdown-content" id="myDropdown4">
						<a href="shoes-sneakers.php"> Sneakers </a>
						<a href="shoes-sandals.php"> Sandals </a>
						<a href="shoes-heels.php"> Heels </a>
						<a href="shoes-boots.php"> Boots </a>
						</div>
					</div> 
					
				<div style="float:right">	
			
				<?php		
					if(isset($_SESSION['CurrentUser'])){
						echo "<a href=\" http://localhost/finalProject/myAccount/php \">Welcome, " . $_SESSION['CurrentUser']. "</a>";
					}else{
						echo "<a href= \" http://localhost/finalProject/login.php \">Login </a> ";
					}
				?>
				
				
				<?php		
					if(isset($_SESSION['CurrentUser'])){
						echo "<a href= \" http://localhost/finalProject/logout.php \">Logout</a>";
					}else{
						echo "<a href= \" http://localhost/finalProject/registrationForm.php \">Register</a>";
					}
					
				?> 
				<a href="#cart"><img src="Photos/bag-icon.png" id="bag-icon"/> Cart </a>
				<a href="#check-out">Check Out </a>
				</div>
			</div>	
		</div>
		</div>
		
		
		<div>
		<div class="content">
		<p id="on-sale">Women's Dresses &amp; Men's Shirts $25 through Wednesday! Shop <a href="#women">Women</a> | <a href="#men">Shop Men</a> </p>
		</div>
		</div>
		
		
		<div id="welcome-content">
		<div class="content">
		
		<div id="rotating-image">
		<img id="imgs" src="Photos/vintage-main.jpg" />
		</div>
		
		<div id="welcome-words">
		<br><br><br><br>
		<p style="color:#000000;"> Online Now!</p>
		<h2 style="color:#ff6600;">New Arrivals </h2>
		<p style="color:#000000;">If you’re a vintage vixen trapped in a modern world, you can play dress-up every day in styles from your favorite <br>
		bygone eras by shopping with Unique Vintage. We love vintage-style clothing just as much as the next gal, and we carry <br>
		a vast assortment of unique items that will make you feel like a classy ‘20s dame, a retro ‘50s pin-up bombshell or a hippie <br>
		chick from the free-spirited ‘70s.</p>
		
		<p><a href="#women" style="color:#ff6600;"> WOMEN'S NEW ARRIVALS </a></p>
		<p><a href="#men" style="color:#ff6600;"> MEN'S NEW ARRIVALS </a></p>
		
		</div>
		</div>
		</div>
		
		<div id="image-buttons">
		<div class="content">
		<button type="button" class="rButton" onclick="displayPreviousImage()">&larr;</button>
		<button type="button" class="rButton" onclick="displayNextImage()">&rarr;</button>
		</div>
		</div>
		
		<div>
		<div class="content">
		<div id="limited-time">
		<hr style="width:85%;">
		<br><br>
		<h2>TOP PRIORITY</h2>
		<hr style="width:45%">
		<p><b> LIMITED TIME in Stores &amp; Online </b></p>
		<h1>$15 OFF any purchase </h1>
		<h3><a href="#men">Shop Men </a>|<a href="#women"> Shop Women</a></h3>
		<p>Select styles. Prices as marked.</p>
		<br><br>
		
		</div>
		</div>
		</div>
		
		<div>
		<div class="content">
		<br>
		<hr style="width:85%;">
		
		<div id="left-icons">
		<p><img src="Photos/gift-card.png" class="l-icons"/> GIFT CARDS <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Give them what they really want. </p>
		
		<p><img src="Photos/hanger.png" class="l-icons"/>MORE WAYS TO SHOP<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In store, on the app or on the site. </p>
		
		<p><img src="Photos/locator.png" class="l-icons"/> STORE LOCATOR <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		</div>
		
		<div id="left-icons">
		<p><img src="Photos/credit-card.png" class="l-icons"/> VINTAGE CREDIT CARDS <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Get 15% off your first purchase. </p>
		
		<p><img src="Photos/email.png" class="l-icons"/> EMAIL SIGN UP <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		
		<p><img src="Photos/truck.ico" class="l-icons"/> TRACK ORDER <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		</div>
		
		<div id="left-icons">
		<p><img src="Photos/question-mark.jpg" class="l-icons"/> HAVE A QUESTION?<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
		<p><img src="Photos/mobile.png" class="l-icons"/> MOBILE ALERT<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
		<p><img src="Photos/rewards.png" class="l-icons"/> REWARDS<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>

		</div>
		</div>
		</div>
		
		<div>
		<div class="content">
		<hr style="width:85%;">
		<footer>
		<p> TERMS OF USE &nbsp; GEORGIA DISCLOSURES &nbsp; PRIVACY NOTICE &nbsp; BRAND PROTECTION
			&nbsp; AFFILIATE PROGRAM </p>
		
		<p>&copy; 2017 Vintage Management Co. All Rights Reserved </p>
		</footer>
		</div>
		</div>
	</div>


</body>
<html>