<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "testing");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Webslesson Demo | Simple PHP Mysql Shopping Cart</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
		body {
				//background-image: url('images/12.jpg');
			}
		</style>
	</head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center">golden arrow</h3>
			<h3 align="center">بوابتك الي عالم السيارات</h3>
			<?php
				$query = "SELECT * FROM tbl_product WHERE id =".$_GET['id'];
				$result = mysqli_query($connect, $query);
				$row = mysqli_fetch_array($result)
				?>
			<div class="col-md-4">
				<form method="post" action="shop.php">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>

			<div style="clear:both"></div>

	</div>
	<br />
	</body>
</html>
