<?php
// $dsn="mysql:dbname=Clothing";
// $username="root";
// $password="root";

	// This method below if mysql using pdo

	// try {
	// 	$conn= new PDO($dsn,$username,$password);
	// 	$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// } catch (PDOException $e) {
	// 	echo "connection failed:" . $e->getMessage();
	// }

	// $sql="SELECT * FROM Item ORDER BY Price DESC";
	// 	echo "<ul>";


	// try {
	// 	$rows=$conn->query($sql);

	// 	foreach ($rows as $row) {
	// 		echo "<li>" . "Id: " . $row["Id"] . ", " . $row["Name"] . " cost $" . $row["Price"] . "</li>";
	// 	}
	// } catch (PDOException $e) {
	// 	echo "Query failed: " . $e->getMessage();
	// }
		
	// echo "</ul>";
	// $conn=null;

	// $sql="insert into Item (Id, Name, Price) values (888, 'Boots', 450.00)";
	// $a = $conn->exec($sql);

	// if ($a==TRUE) {
	// 	echo "New record created successfully";
	// }else{
	// 	echo "Error: " . $sql . "<br>" . $conn->error;
	// }

	// $conn=null

	//This method below if mysqli - so you use classes and objects.

	$servername ="localhost";
	$username="root";
	$password="root";
	$dbname = "Clothing";

	$conn= new mysqli($servername, $username, $password, $dbname);
	
	//check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql1 = "insert into PartyList (id, firstname, lastname, Diet, Attending) values ('$_POST[Id]', '$_POST[First]', '$_POST[Last]', '$_POST[Diet]', '$_POST[Attend]')";
    
	if ($conn->query($sql1) == TRUE) {
		echo "New record created successfully";
	}else{
		echo "Errors: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

?>