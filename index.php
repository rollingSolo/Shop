<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Shop</title>
</head>
<body>
	<div class="flex">
	<?php
		$host = "localhost";
		$user = "postgetman";
		$pass = "999333";
		$db = "shop";
	
		$connection = mysqli_connect($host,$user,$pass,$db);
	
		if(!$connection){
			die("Connection failed: " . mysql_error());
		}

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

		<?php mysqli_close($connection); ?>
	</div>
	

	
	
</body>
</html>