<?php 
	$servername ="localhost";
	$username="root";
	$password="root";
	$dbname = "Clothing";

	$conn= new mysqli($servername, $username, $password, $dbname);

	echo "Connected...<br>";
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql1 = "select * from Item";

	$rows = $conn->query($sql1);
		foreach ($rows as $row) {
			echo "<li> $row[Name], $row[Price]</li>";
	
	}

	if ($rows->["Price"] < 10) {
		echo $rows["Name"] . "is on sale!";
	} else{
		echo "Nothing on sale";
	}
    
	$conn->close();
?>