<!DOCTYPE html> 
<html lang="en"> 
	<head> 
		<title>My PHP Page</title> 
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head> 
	<body> 
		<div class="container">
			<h1>Contacts:</h1> 

            <?php
                $servername = "localhost";
                $username = "contacts_user";
                $password = "passw0rd";
                $dbname = "contacts";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //SQL Query
                $sql = "SELECT id, firstname, lastname, email FROM contact";
                
                //execute the query
                $result = $conn->query($sql);

                //check for 0 rows (no results)
                if ($result->num_rows > 0) {
                    // output data of each row

                    echo "<table class=\"table table-bordered table-striped\">";
                    echo "<tr><th>Id</th><th>Name</th><th>Email</th></tr>";

                    //iterate over the query results
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td><td>" . $row["email"]. "</td></tr>";
                    }

                    echo "</table>";

                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>
			
		</div>
	</body> 
</html>