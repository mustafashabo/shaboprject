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
				background-image: url('images/12.jpg');
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
			<h3 align="center"> بوابة الي عالم السيارات</h3>
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="detail.php?id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						
						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="التفاصيل" />
					
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>

	</div>
	<h3 align="center"><a href="cont.php">اتصل بنا</a></h3>
	<br />
	</body>
</html>