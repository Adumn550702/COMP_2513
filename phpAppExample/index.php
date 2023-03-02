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
					<h4 class="text-success p-3"><em>Welcome to the application, please login.</em></h4>
				
					<form action="main.php" method="post">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="username" class="form-control" name="username" id="username" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
						</div>					  
						<input type="hidden" name="action" value="login"/>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				
				</div>
				<div class="col-sm-2 p-3">
				
				</div>
			</div>
		</div>
	</body>
</html>