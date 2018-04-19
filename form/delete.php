<?php 
	$servername ="localhost";
	$username="root";
	$password="root";
	$dbname = "Clothing";

	$conn= new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql1 = "DELETE FROM PartyList WHERE id=$_POST[IdDel]";
    
	if ($conn->query($sql1) == TRUE) {
		echo "Record deleted successfully";
	}else{
		echo "Errors: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>