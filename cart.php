<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "cart");

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
<?php
	$query = "SELECT * FROM inventory ORDER BY id ASC";
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0){
		  while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
<div>
	<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">  
				
                               <img src="<?php $image = $rows['image']; print $image; ?>" class="img-responsive" /><br/>  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                     </form>  
</div>
<?php  
                     }  
                }  
?>  
</body>
</html>




