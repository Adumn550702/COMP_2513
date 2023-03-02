<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en"> 
	<head>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
			<title>Web App</title>
	</head>
	<body>
		<div class="container">
			<div class="row bg-primary">
				<div class="col-sm-12 text-center p-3">
					<h3>Web App</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2 p-3">
				
				</div>
				<div class="col-sm-8 p-3">

					<?php
					$isLoggedIn = isset($_SESSION['isLoggedIn']) ? $_SESSION['isLoggedIn'] : false;

					$orderId = isset($_REQUEST['orderId']) ? $_REQUEST['orderId'] : false;

					if ($isLoggedIn === true) {

						echo "<h4 class='p-3'>Order Id # " . $orderId . "</h4>";
							
						$db_servername = "localhost";
						$db_username = "orders_user";
						$db_password = "passw0rd";
						$db_name = "orders";

						$db_conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
						if ($db_conn->connect_error) {
							die("Connection failed: " . $db_conn->connect_error);
						} 

						$sql = "SELECT id, item_description, item_name, item_price FROM order_item WHERE order_id = " . $orderId;
						//echo $sql;

						$db_result = $db_conn->query($sql);

						if ($db_result->num_rows > 0) {
							echo "<table class='table'><tr><th>ID</th><th>Name</td><th>Description</th><th>Price</th></tr>";
							// output data of each row
							while($row = $db_result->fetch_assoc()) {
								echo "<tr><td>".$row["id"]."</td><td>".$row["item_name"]."</td><td>".$row["item_description"]."</td><td>".$row["item_price"]."</td></tr>";
							}
							echo "</table>";
						} else {
							echo "0 results";
						}
						
						echo "<p><a href='report.php'>back</a></p>";
						
					} else {
						
						echo '<script type="text/javascript">
							window.location = "index.php"
						</script>';	
						
					}
					?>


				</div>
				<div class="col-sm-2 p-3">
				
				</div>
			</div>
		</div>
	</body>
</html>