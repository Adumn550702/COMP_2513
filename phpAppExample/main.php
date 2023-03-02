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

				$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

				if ($action === "login") {
					
					$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : '';
					$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';

					$db_servername = "localhost";
					$db_username = "orders_user";
					$db_password = "passw0rd";
					$db_name = "orders";

					$db_conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
					if ($db_conn->connect_error) {
						die("Connection failed: " . $db_conn->connect_error);
					} 

					$sql = "SELECT * FROM users WHERE username = '".$username."' and password = '".$password."'";

					//echo "<P>" . $sql . "</p>";

					$db_result = $db_conn->query($sql);

					if ($db_result->num_rows > 0) {
						$_SESSION["isLoggedIn"] = true;
						$_SESSION["username"] = $username;
					}
					
				} elseif ($action === "logout") {
					
					session_unset(); 
					session_destroy(); 	
					
				}

				$isLoggedIn = isset($_SESSION['isLoggedIn']) ? $_SESSION['isLoggedIn'] : false;

				if ($isLoggedIn === true) {

					echo "<h3 class='p-3 text-success'>Welcome to the application, " . $_SESSION["username"] . "</h3>";
					
					echo "<h4 class='p-3'>You can go to the <a href='report.php'>report page</a></h4>";
					
					echo "<br/><br/><br/><br/><p>";

					echo "<a href='main.php?action=logout'>logout</a>";
					
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