<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Shop</title>
</head>
<body>
	<div class="header">
		<ul class="nav">
			<li><a href="#">Home</a></li>
			<li><a href="register.php">Sign Up</a></li>
			<li><a href="signin.php">Sign In</a></li>
		</ul>
	</div>
		
	<div class="flex">
	<?php
		require('connect.php');
		$query = "SELECT * FROM `products`";

		$result = mysqli_query($connection,$query);

		while($row = mysqli_fetch_assoc($result)){?>
			<div class="container">
				<div class="image"><img src="<?php echo $row['image'];?>" alt="cook"></div>
				<div class="name"><?php echo $row['name'];?></div>
				<div class="price"><?php echo $row['price'];?></div>
				<a href="#" class="buy">Buy</a>	
			</div>
				
	<?php } ?>
	</div>
	

	
	
</body>
</html>