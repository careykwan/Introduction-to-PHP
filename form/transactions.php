<?php
$servername ="localhost";
	$username="root";
	$password="root";
	$dbname = "Clothing";

	$conn= new mysqli($servername, $username, $password, $dbname);
	
	//check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "CREATE TABLE PartyList (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		Diet VARCHAR(50),
		Attending BOOLEAN
		)";
    
	if ($conn->query($sql) == TRUE) {
		echo "Table created successfully";
	}else{
		echo "Error creating Table: " . $conn->error;
	}
	$conn->close();
?>